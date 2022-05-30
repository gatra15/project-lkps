<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sumberdaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Exports\KinerjaDosenPkmDtpsExport;
use App\Models\SdmKinerjaDosenLuaranPkmDtps;

class SdmKinerjaDosenPkmDtpsController extends Controller
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
        $cek = SdmKinerjaDosenPkmDtps::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();
        $cek1 = SdmKinerjaDosenPkmDtps::where('tahun_laporan', $tahun - 1)->where('prodi', $prodi)->exists();
        $cek2 = SdmKinerjaDosenPkmDtps::where('tahun_laporan', $tahun - 2)->where('prodi', $prodi)->exists();

        // cek sumber
        $sumber = SdmKinerjaDosenPkmDtps::where('sumber_id', 1)->exists();
        $sumber2 = SdmKinerjaDosenPkmDtps::where('sumber_id', 2)->exists();
        $sumber3 = SdmKinerjaDosenPkmDtps::where('sumber_id', 3)->exists();

        // dd($sumber2);
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun - 1, 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun - 2, 'prodi' => $prodi];

        if(!($cek2 && $sumber)){
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 1,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sumber)) {
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 1,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sumber)) {
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 1,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

        // Kedua
        if(!($cek2 && $sumber2)){
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 2,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sumber2)) {
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 2,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sumber2)) {
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 2,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

        // Sumber 3
        if(!($cek2 && $sumber3)){
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 3,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sumber3)) {
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 3,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sumber3)) {
            SdmKinerjaDosenPkmDtps::create([
                'sumber_id' => 3,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

        $ts_all = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->get();
        $ts_all_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->where('is_approved',1)->get();
        $ts = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->where('sumber_id', 1)->get();
        $ts_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->where('sumber_id', 1)->where('is_approved',1)->get();
        $ts1 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where1)->where('sumber_id', 1)->get();
        $ts1_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where1)->where('sumber_id', 1)->where('is_approved',1)->get();
        $ts2 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where2)->where('sumber_id', 1)->get();
        $ts2_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where2)->where('sumber_id', 1)->where('is_approved',1)->get();
        
        // sumber 2
        $ts_sumber2 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->where('sumber_id', 2)->get();
        $ts_sumber2_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->where('sumber_id', 2)->where('is_approved',1)->get();
        $ts1_sumber2 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where1)->where('sumber_id', 2)->get();
        $ts1_sumber2_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where1)->where('sumber_id', 2)->where('is_approved',1)->get();
        $ts2_sumber2 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where2)->where('sumber_id', 2)->get();
        $ts2_sumber2_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where2)->where('sumber_id', 2)->where('is_approved',1)->get();

        // sumber 3
        $ts_sumber3 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->where('sumber_id', 3)->get();
        $ts_sumber3_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where)->where('sumber_id', 3)->where('is_approved',1)->get();
        $ts1_sumber3 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where1)->where('sumber_id', 3)->get();
        $ts1_sumber3_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where1)->where('sumber_id', 3)->where('is_approved',1)->get();
        $ts2_sumber3 = SdmKinerjaDosenPkmDtps::with('sumber')->where($where2)->where('sumber_id', 3)->get();
        $ts2_sumber3_asesor = SdmKinerjaDosenPkmDtps::with('sumber')->where($where2)->where('sumber_id', 3)->where('is_approved',1)->get();

        $NI = SdmKinerjaDosenPkmDtps::where($where)->where('sumber_id', 3)->sum('jumlah');
        $NN = SdmKinerjaDosenPkmDtps::where($where)->where('sumber_id', 2)->sum('jumlah');
        $NL = SdmKinerjaDosenPkmDtps::where($where)->where('sumber_id', 1)->sum('jumlah');

        $jumlah_ts2 = SdmKinerjaDosenPkmDtps::where($where2)->sum('jumlah_ts');
        $jumlah_ts1 = SdmKinerjaDosenPkmDtps::where($where1)->sum('jumlah_ts');
        $jumlah_ts = SdmKinerjaDosenPkmDtps::where($where)->sum('jumlah_ts');
        $jumlah = SdmKinerjaDosenPkmDtps::where($where)->sum('jumlah');
        $jumlah_ts2_asesor = SdmKinerjaDosenPkmDtps::where($where2)->where('is_approved',1)->sum('jumlah_ts');
        $jumlah_ts1_asesor = SdmKinerjaDosenPkmDtps::where($where1)->where('is_approved',1)->sum('jumlah_ts');
        $jumlah_ts_asesor = SdmKinerjaDosenPkmDtps::where($where)->where('is_approved',1)->sum('jumlah_ts');
        $jumlah_asesor = SdmKinerjaDosenPkmDtps::where($where)->where('is_approved',1)->sum('jumlah');
        return [
            'ts_all' => $ts_all,
            'ts_all_asesor' => $ts_all_asesor,
            'ts' => $ts,
            'ts_asesor' => $ts_asesor,
            'ts1' => $ts1,
            'ts1_asesor' => $ts1_asesor,
            'ts2' => $ts2,
            'ts2_asesor' => $ts2_asesor,
            'ts_sumber2' => $ts_sumber2,
            'ts_sumber2_asesor' => $ts_sumber2_asesor,
            'ts1_sumber2' => $ts1_sumber2,
            'ts1_sumber2_asesor' => $ts1_sumber2_asesor,
            'ts2_sumber2' => $ts2_sumber2,
            'ts2_sumber2_asesor' => $ts2_sumber2_asesor,
            'ts_sumber3' => $ts_sumber3,
            'ts_sumber3_asesor' => $ts_sumber3_asesor,
            'ts1_sumber3' => $ts1_sumber3,
            'ts1_sumber3_asesor' => $ts1_sumber3_asesor,
            'ts2_sumber3' => $ts2_sumber3,
            'ts2_sumber3_asesor' => $ts2_sumber3_asesor,
            'jumlah_ts2' => $jumlah_ts2,
            'jumlah_ts1' => $jumlah_ts1,
            'jumlah_ts' => $jumlah_ts,
            'jumlah' => $jumlah,
            'jumlah_ts2_asesor' => $jumlah_ts2_asesor,
            'jumlah_ts1_asesor' => $jumlah_ts1_asesor,
            'jumlah_ts_asesor' => $jumlah_ts_asesor,
            'jumlah_asesor' => $jumlah_asesor,
            'NI' => $NI,
            'NN' => $NN,
            'NL' => $NL,
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
        // $this->validate($req, [
        //     'sumber_pembiayaan' => 'required',
        //     'jumlah_ts2' => 'required',
        //     'jumlah_ts1' => 'required',
        //     'jumlah_ts' => 'required',
        //     'jumlah' => 'required',
        // ]);

        // $pkm = new SdmKinerjaDosenPkmDtps;
        // $pkm->sumber_pembiayaan = $req->input('sumber_pembiayaan');
        // $pkm->jumlah_ts2 = $req->input('jumlah_ts2');
        // $pkm->jumlah_ts1 = $req->input('jumlah_ts1');
        // $pkm->jumlah_ts = $req->input('jumlah_ts');
        // $pkm->sumber_id = Sumberdaya::all()->id;
        // $pkm->tahun_laporan = '2022';
        // $pkm->prodi = auth()->user()->prodi->name;
        // $pkm->created_by = auth()->user()->name;
        // $pkm->created_at = Carbon::now();
        // dd($pkm);
        // return back()->with('success', ' Pkm Dtps has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPkmDtps  $sdmKinerjaDosenPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenPkmDtps $sdmKinerjaDosenPkmDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPkmDtps  $sdmKinerjaDosenPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenPkmDtps $sdmKinerjaDosenPkmDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenPkmDtps  $sdmKinerjaDosenPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $year, $sumber)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'sumber_id' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
        ]);

        try {
            $jumlah = $req->input('jumlah_ts2') + $req->input('jumlah_ts1') + $req->input('jumlah_ts');
            SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year-2)->where('sumber_id', $sumber)
            ->update([
                'sumber_id' => $req->input('sumber_id'),
                'jumlah_ts' => (int) $req->input('jumlah_ts2'),
                'tahun_laporan' => $tahun - 2,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS-1
            SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year-1)->where('sumber_id', $sumber)
            ->update([
                'sumber_id' => $req->input('sumber_id'),
                'jumlah_ts' => (int) $req->input('jumlah_ts1'),
                'tahun_laporan' => $tahun - 1,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS
            SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year)->where('sumber_id', $sumber)
            ->update([
                'sumber_id' => $req->input('sumber_id'),
                'jumlah_ts' => (int) $req->input('jumlah_ts'),
                'jumlah' => $jumlah,
                'tahun_laporan' => $tahun,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);

        return back()->with('success', 'Data  Pkm Dtps berhasil ditambahkan.');
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
     * @param  \App\Models\SdmKinerjaDosenPkmDtps  $sdmKinerjaDosenPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $year, $sumber)
    {
        $tahun = session('tahun_laporan');
        $jumlah = $req->input('jumlah_ts2') + $req->input('jumlah_ts1') + $req->input('jumlah_ts');
        SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year-2)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => (int) $req->input('jumlah_ts2'),
            'tahun_laporan' => $tahun - 2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS-1
        SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year-1)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => (int) $req->input('jumlah_ts1'),
            'tahun_laporan' => $tahun - 1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS
        SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => (int) $req->input('jumlah_ts'),
            'jumlah' => $jumlah,
            'tahun_laporan' => $tahun,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('error', 'Data Pkm Dtps berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new KinerjaDosenPkmDtpsExport, 'kinerja-dosen-pkm-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new KinerjaDosenPkmDtpsExport, 'kinerja-dosen-pkm-dtps.csv');
    }

    public function approve($year, $sumber)
    {
        // TS-2
        SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year-2)->where('sumber_id', $sumber)
        ->update([
            'is_approved' => true,
            'comment' => 'Data Kinerja Dosen Publikasi Ilmiah Dtps telah disetujui.',
            'alert' => 'success',
            'updated_by' => auth()->user()->name,
            'updated_at' => Carbon::now(),
        ]);

        // TS-1
        SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year-1)->where('sumber_id', $sumber)
        ->update([
            'is_approved' => true,
            'comment' => 'Data Kinerja Dosen Publikasi Ilmiah Dtps telah disetujui.',
            'alert' => 'success',
            'updated_by' => auth()->user()->name,
            'updated_at' => Carbon::now(),
        ]);

        // TS-1
        SdmKinerjaDosenPkmDtps::where('tahun_laporan', $year)->where('sumber_id', $sumber)
        ->update([
            'is_approved' => true,
            'comment' => 'Data Kinerja Dosen Publikasi Ilmiah Dtps telah disetujui.',
            'alert' => 'success',
            'updated_by' => auth()->user()->name,
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Data Kinerja Dosen PKM Dtps berhasil disetujui.');
    }

    public function tolak(Request $req, $year, $sumber)
    {
        SdmKinerjaDosenLuaranPkmDtps::where('tahun_laporan', $year-2)->where('sumber_id', $sumber)
         ->update([
             'is_approved' => false,
             'comment' => $req->alasan,
             'alert' => 'warning',
             'updated_by' => auth()->user()->name,
             'updated_at' => Carbon::now(),
         ]);
 
         // TS-1
         SdmKinerjaDosenLuaranPkmDtps::where('tahun_laporan', $year-1)->where('sumber_id', $sumber)
         ->update([
             'is_approved' => false,
             'comment' => $req->alasan,
             'alert' => 'warning',
             'updated_by' => auth()->user()->name,
             'updated_at' => Carbon::now(),
         ]);
 
         // TS-1
         SdmKinerjaDosenLuaranPkmDtps::where('tahun_laporan', $year)->where('sumber_id', $sumber)
         ->update([
             'is_approved' => false,
             'comment' => $req->alasan,
             'alert' => 'warning',
             'updated_by' => auth()->user()->name,
             'updated_at' => Carbon::now(),
         ]);
        return back()->with('success', 'Data Kinerja Dosen PKM Dtps berhasil ditolak.');
    }
}
