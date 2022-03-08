<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmKinerjaDosenLuaranPkmDtps;

class SdmKinerjaDosenLuaranPkmDtpsController extends Controller
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
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
        ]);

        $pengakuan = new SdmKinerjaDosenLuaranPkmDtps;
        $pengakuan->type_luaran = $req->input('type_luaran');
        $pengakuan->judul = $req->input('judul');
        $pengakuan->tahun = $req->input('tahun');
        $pengakuan->keterangan = $req->input('keterangan');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Luaran Pkm Dtps has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenLuaranPkmDtps $sdmKinerjaDosenLuaranPkmDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenLuaranPkmDtps $sdmKinerjaDosenLuaranPkmDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
            'jumlah' => 'required',
        ]);

        $pengakuan = new SdmKinerjaDosenLuaranPkmDtps;
        $pengakuan->type_luaran = $req->input('type_luaran');
        $pengakuan->judul = $req->input('judul');
        $pengakuan->tahun = $req->input('tahun');
        $pengakuan->keterangan = $req->input('keterangan');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->updated_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Luaran Pkm Dtps has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmKinerjaDosenLuaranPkmDtps::find($id)->delete();
        return back()->with('error', 'Sdm Kinerja Dosen Luaran Pkm Dtps has been deleted.');
    }
}
