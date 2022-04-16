<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Models\SdmKinerjaDosenPenelitianDtps;
use App\Exports\KinerjaDosenPenelitianDtpsExport;
use App\Models\Sumberdaya;

class SdmKinerjaDosenPenelitianDtpsController extends Controller
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
        $cek = SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();
        $cek1 = SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $tahun - 1)->where('prodi', $prodi)->exists();
        $cek2 = SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $tahun - 2)->where('prodi', $prodi)->exists();

        // cek sumber
        $sumber = SdmKinerjaDosenPenelitianDtps::where('sumber_id', 1)->exists();
        $sumber2 = SdmKinerjaDosenPenelitianDtps::where('sumber_id', 2)->exists();
        $sumber3 = SdmKinerjaDosenPenelitianDtps::where('sumber_id', 3)->exists();

        // dd($sumber2);
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun - 1, 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun - 2, 'prodi' => $prodi];

        if(!($cek2 && $sumber)){
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 1,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sumber)) {
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 1,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sumber)) {
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 1,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

        // Kedua
        if(!($cek2 && $sumber2)){
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 2,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sumber2)) {
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 2,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sumber2)) {
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 2,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

        // Sumber 3
        if(!($cek2 && $sumber3)){
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 3,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sumber3)) {
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 3,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sumber3)) {
            SdmKinerjaDosenPenelitianDtps::create([
                'sumber_id' => 3,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

        $ts_all = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->get();
        $ts_all_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->where('is_approved',1)->get();
        $ts = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->where('sumber_id', 1)->get();
        $ts_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->where('sumber_id', 1)->where('is_approved',1)->get();
        $ts1 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where1)->where('sumber_id', 1)->get();
        $ts1_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where1)->where('sumber_id', 1)->where('is_approved',1)->get();
        $ts2 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where2)->where('sumber_id', 1)->get();
        $ts2_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where2)->where('sumber_id', 1)->where('is_approved',1)->get();
        
        // sumber 2
        $ts_sumber2 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->where('sumber_id', 2)->get();
        $ts_sumber2_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->where('sumber_id', 2)->where('is_approved',1)->get();
        $ts1_sumber2 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where1)->where('sumber_id', 2)->get();
        $ts1_sumber2_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where1)->where('sumber_id', 2)->where('is_approved',1)->get();
        $ts2_sumber2 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where2)->where('sumber_id', 2)->get();
        $ts2_sumber2_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where2)->where('sumber_id', 2)->where('is_approved',1)->get();

        // sumber 3
        $ts_sumber3 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->where('sumber_id', 3)->get();
        $ts_sumber3_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where)->where('sumber_id', 3)->where('is_approved',1)->get();
        $ts1_sumber3 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where1)->where('sumber_id', 3)->get();
        $ts1_sumber3_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where1)->where('sumber_id', 3)->where('is_approved',1)->get();
        $ts2_sumber3 = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where2)->where('sumber_id', 3)->get();
        $ts2_sumber3_asesor = SdmKinerjaDosenPenelitianDtps::with('sumber')->where($where2)->where('sumber_id', 3)->where('is_approved',1)->get();

        $NI = SdmKinerjaDosenPenelitianDtps::where($where)->where('sumber_id', 3)->sum('jumlah');
        $NN = SdmKinerjaDosenPenelitianDtps::where($where)->where('sumber_id', 2)->sum('jumlah');
        $NL = SdmKinerjaDosenPenelitianDtps::where($where)->where('sumber_id', 1)->sum('jumlah');

        $jumlah_ts2 = SdmKinerjaDosenPenelitianDtps::where($where2)->sum('jumlah_ts');
        $jumlah_ts1 = SdmKinerjaDosenPenelitianDtps::where($where1)->sum('jumlah_ts');
        $jumlah_ts = SdmKinerjaDosenPenelitianDtps::where($where)->sum('jumlah_ts');
        $jumlah = SdmKinerjaDosenPenelitianDtps::where($where)->sum('jumlah');
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
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenPenelitianDtps $sdmKinerjaDosenPenelitianDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenPenelitianDtps $sdmKinerjaDosenPenelitianDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
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
        

        try{
        // TS-2
        $jumlah = $req->input('jumlah_ts2') + $req->input('jumlah_ts1') + $req->input('jumlah_ts');
        SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $year-2)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => (int) $req->input('jumlah_ts2'),
            'tahun_laporan' => $tahun - 2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS-1
        SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $year-1)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => (int) $req->input('jumlah_ts1'),
            'tahun_laporan' => $tahun - 1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS
        SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $year)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => (int) $req->input('jumlah_ts'),
            'jumlah' => $jumlah,
            'tahun_laporan' => $tahun,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        // dd($pengakuan);

        return back()->with('success', 'Data Penelitian Dtps berhasil ditambahkan.');
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
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $year, $sumber)
    {
        $tahun = session('tahun_laporan');
        $jumlah = $req->input('jumlah_ts2') + $req->input('jumlah_ts1') + $req->input('jumlah_ts');
        SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $year-2)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => null,
            'tahun_laporan' => $tahun - 2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS-1
        SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $year-1)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => null,
            'tahun_laporan' => $tahun - 1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS
        SdmKinerjaDosenPenelitianDtps::where('tahun_laporan', $year)->where('sumber_id', $sumber)
        ->update([
            'sumber_id' => $req->input('sumber_id'),
            'jumlah_ts' => null,
            'jumlah' => $jumlah,
            'tahun_laporan' => $tahun,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Data Penelitian Dtps berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new KinerjaDosenPenelitianDtpsExport, 'kinerja-dosen-penelitian-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new KinerjaDosenPenelitianDtpsExport, 'kinerja-dosen-penelitian-dtps.csv');
    }

    public function approve($id)
    {
        $data = SdmKinerjaDosenPenelitianDtps::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Kinerja Dosen Penelitian Dtps telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Kinerja Dosen Penelitian Dtps berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = SdmKinerjaDosenPenelitianDtps::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Kinerja Dosen Penelitian Dtps berhasil ditolak.');
    }
}
