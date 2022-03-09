<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sumberdaya;
use Illuminate\Http\Request;
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
        //
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
        $this->validate($req, [
            'sumber_pembiayaan' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
            'jumlah' => 'required',
        ]);

        $pkm = new SdmKinerjaDosenPkmDtps;
        $pkm->sumber_pembiayaan = $req->input('sumber_pembiayaan');
        $pkm->jumlah_ts2 = $req->input('jumlah_ts2');
        $pkm->jumlah_ts1 = $req->input('jumlah_ts1');
        $pkm->jumlah_ts = $req->input('jumlah_ts');
        $pkm->sumber_id = Sumberdaya::all()->id;
        $pkm->tahun_laporan = '2022';
        $pkm->prodi = auth()->user()->prodi;
        $pkm->created_by = auth()->user()->name;
        $pkm->created_at = Carbon::now();
        dd($pkm);
        return back()->with('success', 'Sdm Kinerja Dosen Pkm Dtps has been created.');
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
        $this->validate($req, [
            'sumber_pembiayaan' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
            'jumlah' => 'required',
        ]);

        $pkm = new SdmKinerjaDosenPkmDtps;
        $pkm->sumber_pembiayaan = $req->input('sumber_pembiayaan');
        $pkm->jumlah_ts2 = $req->input('jumlah_ts2');
        $pkm->jumlah_ts1 = $req->input('jumlah_ts1');
        $pkm->jumlah_ts = $req->input('jumlah_ts');
        $pkm->sumber_id = Sumberdaya::all()->id;
        $pkm->tahun_laporan = '2022';
        $pkm->prodi = auth()->user()->prodi;
        $pkm->created_by = auth()->user()->name;
        $pkm->updated_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Pkm Dtps has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmKinerjaDosenPkmDtps  $sdmKinerjaDosenPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmKinerjaDosenPkmDtps::find($id)->delete();
        return back()->with('error', 'Sdm Kinerja Dosen Pkm Dtps has been updated.');
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
