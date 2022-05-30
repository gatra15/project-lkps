<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SdmDosenPembimbingTa;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DosenPembimbingTAExport;
use App\Models\SdmDosen;

class SdmDosenPembimbingTaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun-1, 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun-2, 'prodi' => $prodi];
        $nama = SdmDosenPembimbingTa::select('nama')->exists();
        $cek = SdmDosenPembimbingTa::where($where)->exists();
        $cek1 = SdmDosenPembimbingTa::where($where1)->exists();
        $cek2 = SdmDosenPembimbingTa::where($where2)->exists();
        $getnama = SdmDosenPembimbingTa::select('nama')->where($where1)->get();
        $data = [];

        foreach ($getnama as $key => $name)
        {
            $data[] = $name['nama'];
        }

        if(!$cek2 && $nama)
        {
            foreach ($data as $d)
            {
                SdmDosenPembimbingTa::create([
                    'nama' => $d,
                    'tahun_laporan' => $tahun - 2,
                    'prodi' => $prodi
                ]);
            }
        }
        if(!$cek1 && $nama)
        {
            foreach ($data as $d)
            {
                SdmDosenPembimbingTa::create([
                    'nama' => $d,
                    'tahun_laporan' => $tahun - 1,
                    'prodi' => $prodi
                ]);
            }
        }
        if(!$cek && $nama)
        {
            foreach ($data as $d)
            {
                SdmDosenPembimbingTa::create([
                    'nama' => $d,
                    'tahun_laporan' => $tahun,
                    'prodi' => $prodi
                ]);
            }
        }
        $dosen_all = SdmDosenPembimbingTa::all();
        $dosenta = DB::table('sdm_dosen_pembimbing_tas as a')
                    ->join('sdm_dosen_pembimbing_tas as b', 'a.nama', 'b.nama')
                    ->join('sdm_dosen_pembimbing_tas as c', 'a.nama', 'c.nama')
                    ->where('a.tahun_laporan', $tahun)
                    ->where('b.tahun_laporan', $tahun-1)
                    ->where('c.tahun_laporan', $tahun-2)
                    ->select(
                        'a.id as id',
                        'a.nama as nama',
                        'c.jumlah_ps_akreditasi_ts as jumlah_ps_akreditasi_ts2',
                        'b.jumlah_ps_akreditasi_ts as jumlah_ps_akreditasi_ts1',
                        'a.jumlah_ps_akreditasi_ts',
                        'a.jumlah_ps_akreditasi_average',
                        'c.jumlah_ps_lain_ts as jumlah_ps_lain_ts2',
                        'b.jumlah_ps_lain_ts as jumlah_ps_lain_ts1',
                        'a.jumlah_ps_lain_ts',
                        'a.jumlah_ps_lain_average',
                        'a.average',
                        'a.tahun_laporan',
                        'a.is_approved',
                    )
                    ->get();
                    $dosenta = json_decode(json_encode($dosenta), true);
        $average = SdmDosenPembimbingTa::where($where)->sum('average');
        return [
            'dosen' => $dosenta,
            'dosen_all' => $dosen_all,
            'average' => $average,
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $rule = [
            'nama' => 'required',
            'jumlah_ps_akreditasi_ts2' => 'required|numeric',
            'jumlah_ps_akreditasi_ts1' => 'required|numeric',
            'jumlah_ps_akreditasi_ts' => 'required|numeric',
            'jumlah_ps_lain_ts2' => 'required|numeric',
            'jumlah_ps_lain_ts1' => 'required|numeric',
            'jumlah_ps_lain_ts' => 'required|numeric',
        ];
        $this->validate($req, $rule);

    try{

        $jumlah_ps_akreditasi_average = (float) ($req->jumlah_ps_akreditasi_ts2 + $req->jumlah_ps_akreditasi_ts1 + $req->jumlah_ps_akreditasi_ts)/3;
        $jumlah_ps_lain_average = (float) ($req->jumlah_ps_lain_ts2 + $req->jumlah_ps_lain_ts1 + $req->jumlah_ps_lain_ts)/3;
        $average = (float) ($jumlah_ps_lain_average + $jumlah_ps_akreditasi_average)/2;
        SdmDosenPembimbingTa::create([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts2,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts2,
            'tahun_laporan' => $tahun - 2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        SdmDosenPembimbingTa::create([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts1,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts1,
            'tahun_laporan' => $tahun - 1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        SdmDosenPembimbingTa::create([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts,
            'jumlah_ps_akreditasi_average' => $jumlah_ps_akreditasi_average,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts,
            'jumlah_ps_lain_average' => $jumlah_ps_lain_average,
            'average' => $average,
            'tahun_laporan' => $tahun,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Data berhasi ditambahkan.');
        
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function show(SdmDosenPembimbingTa $sdmDosenPembimbingTa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmDosenPembimbingTa $sdmDosenPembimbingTa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $year)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $rule = [
            'nama' => 'required',
            'jumlah_ps_akreditasi_ts2' => 'integer|required',
            'jumlah_ps_akreditasi_ts1' => 'integer|required',
            'jumlah_ps_akreditasi_ts' => 'integer|required',
            'jumlah_ps_lain_ts2' => 'integer|required',
            'jumlah_ps_lain_ts1' => 'integer|required',
            'jumlah_ps_lain_ts' => 'integer|required',
        ];
        $this->validate($req, $rule);

    try{
        $jumlah_ps_akreditasi_average = (float) ($req->jumlah_ps_akreditasi_ts2 + $req->jumlah_ps_akreditasi_ts1 + $req->jumlah_ps_akreditasi_ts)/3;
        $jumlah_ps_lain_average = (float) ($req->jumlah_ps_lain_ts2 + $req->jumlah_ps_lain_ts1 + $req->jumlah_ps_lain_ts)/3;
        $average = (float) ($jumlah_ps_lain_average + $jumlah_ps_akreditasi_average)/2;
        
        SdmDosenPembimbingTa::where('tahun_laporan', $year - 2)->where('nama', $req->nama)->update([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts2,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        SdmDosenPembimbingTa::where('tahun_laporan', $year - 1)->where('nama', $req->nama)->update([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts1,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        SdmDosenPembimbingTa::where('tahun_laporan', $year)->where('nama', $req->nama)->update([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts,
            'jumlah_ps_akreditasi_average' => $jumlah_ps_akreditasi_average,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts,
            'jumlah_ps_lain_average' => $jumlah_ps_lain_average,
            'average' => $average,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Data berhasil diubah.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $year)
    {
        SdmDosenPembimbingTa::where('tahun_laporan', $year - 2)->update([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts2,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        SdmDosenPembimbingTa::where('tahun_laporan', $year - 1)->update([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts1,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        SdmDosenPembimbingTa::where('tahun_laporan', $year)->update([
            'nama' => $req->nama,
            'jumlah_ps_akreditasi_ts' => (int) $req->jumlah_ps_akreditasi_ts,
            'jumlah_ps_lain_ts' => (int) $req->jumlah_ps_lain_ts,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Data berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new DosenPembimbingTAExport, 'dosen-pembimbing-ta.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new DosenPembimbingTAExport, 'dosen-pembimbing-ta.csv');
    }

    public function approve($year)
    {
        // TS-2
        SdmDosenPembimbingTa::where('tahun_laporan', $year-2)
        ->update([
            'is_approved' => true,
            'comment' => 'Data Sdm Dosen Pembimbing TA telah disetujui.',
            'alert' => 'success',
            'updated_by' => auth()->user()->name,
            'updated_at' => Carbon::now(),
        ]);

        // TS-1
        SdmDosenPembimbingTa::where('tahun_laporan', $year-1)
        ->update([
            'is_approved' => true,
            'comment' => 'Data Sdm Dosen Pembimbing TA telah disetujui.',
            'alert' => 'success',
            'updated_by' => auth()->user()->name,
            'updated_at' => Carbon::now(),
        ]);

        // TS-1
        SdmDosenPembimbingTa::where('tahun_laporan', $year)
        ->update([
            'is_approved' => true,
            'comment' => 'Data Sdm Dosen Pembimbing TA telah disetujui.',
            'alert' => 'success',
            'updated_by' => auth()->user()->name,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Data Sdm Dosen Pembimbing TA berhasil disetujui.');
    }

    public function tolak(Request $req, $year)
    {
        SdmDosenPembimbingTa::where('tahun_laporan', $year-2)
         ->update([
             'is_approved' => false,
             'comment' => $req->alasan,
             'alert' => 'warning',
             'updated_by' => auth()->user()->name,
             'updated_at' => Carbon::now(),
         ]);
 
         // TS-1
         SdmDosenPembimbingTa::where('tahun_laporan', $year-1)
         ->update([
             'is_approved' => false,
             'comment' => $req->alasan,
             'alert' => 'warning',
             'updated_by' => auth()->user()->name,
             'updated_at' => Carbon::now(),
         ]);
 
         // TS-1
         SdmDosenPembimbingTa::where('tahun_laporan', $year)
         ->update([
             'is_approved' => false,
             'comment' => $req->alasan,
             'alert' => 'warning',
             'updated_by' => auth()->user()->name,
             'updated_at' => Carbon::now(),
         ]);
        return back()->with('success', 'Data Sdm Dosen Pembimbing TA berhasil ditolak.');
    }
}
