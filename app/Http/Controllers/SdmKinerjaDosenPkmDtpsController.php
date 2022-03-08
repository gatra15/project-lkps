<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmKinerjaDosenPkmDtps;

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

        $pengakuan = new SdmKinerjaDosenPkmDtps;
        $pengakuan->sumber_pembiayaan = $req->input('sumber_pembiayaan');
        $pengakuan->jumlah_ts2 = $req->input('jumlah_ts2');
        $pengakuan->jumlah_ts1 = $req->input('jumlah_ts1');
        $pengakuan->jumlah_ts = $req->input('jumlah_ts');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();

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

        $pengakuan = new SdmKinerjaDosenPkmDtps;
        $pengakuan->sumber_pembiayaan = $req->input('sumber_pembiayaan');
        $pengakuan->jumlah_ts2 = $req->input('jumlah_ts2');
        $pengakuan->jumlah_ts1 = $req->input('jumlah_ts1');
        $pengakuan->jumlah_ts = $req->input('jumlah_ts');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->updated_at = Carbon::now();

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
}
