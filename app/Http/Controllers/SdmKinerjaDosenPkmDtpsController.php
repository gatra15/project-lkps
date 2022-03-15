<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sumberdaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Exports\KinerjaDosenPkmDtpsExport;

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
        $pkm = SdmKinerjaDosenPkmDtps::with('sumber_detail')->where('tahun_laporan', $tahun)->get();
        $jumlah_ts2 = SdmKinerjaDosenPkmDtps::where('tahun_laporan', $tahun-2)->sum('jumlah_ts2');
        $jumlah_ts1 = SdmKinerjaDosenPkmDtps::where('tahun_laporan', $tahun-1)->sum('jumlah_ts1');
        $jumlah_ts = SdmKinerjaDosenPkmDtps::where('tahun_laporan', $tahun)->sum('jumlah_ts');
        $jumlah = SdmKinerjaDosenPkmDtps::sum('jumlah');
        return [
            'pkm' => $pkm,
            'jumlah_ts2' => $jumlah_ts2,
            'jumlah_ts1' => $jumlah_ts1,
            'jumlah_ts' => $jumlah_ts,
            'jumlah' => $jumlah
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
    public function update(Request $req, $id)
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
        $pkm = SdmKinerjaDosenPkmDtps::find($id);
        $pkm->sumber_id = $req->input('sumber_id');
        $pkm->jumlah_ts2 = (int) $req->input('jumlah_ts2');
        $pkm->jumlah_ts1 = (int) $req->input('jumlah_ts1');
        $pkm->jumlah_ts = (int) $req->input('jumlah_ts');
        $pkm->jumlah = $req->jumlah_ts + $req->jumlah_ts1 + $req->jumlah_ts2;
        $pkm->tahun_laporan = $tahun;
        $pkm->prodi = auth()->user()->prodi->name;
        $pkm->created_by = auth()->user()->name;
        $pkm->created_at = Carbon::now();
        $pkm->update();

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
    public function destroy(Request $req,$id)
    {
        $tahun = session('tahun_laporan');
        $pkm = SdmKinerjaDosenPkmDtps::find($id);
        $pkm->sumber_id = $req->input('sumber_id');
        $pkm->jumlah_ts2 = null;
        $pkm->jumlah_ts1 = null;
        $pkm->jumlah_ts = null;
        $pkm->jumlah = null;
        $pkm->tahun_laporan = $tahun;
        $pkm->prodi = auth()->user()->prodi->name;
        $pkm->updated_by = auth()->user()->name;
        $pkm->updated_at = Carbon::now();
        $pkm->update();
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
}
