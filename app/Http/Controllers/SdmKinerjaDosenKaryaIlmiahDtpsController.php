<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Models\SdmKinerjaDosenPkmDtps;

class SdmKinerjaDosenKaryaIlmiahDtpsController extends Controller
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
            'nama' => 'required',
            'judul' => 'required',
            'jumlah_sitasi' => 'required',

        ]);

        $pengakuan = new SdmKinerjaDosenKaryaIlmiahDtps;
        $pengakuan->nama = $req->input('nama');
        $pengakuan->judul = $req->input('judul');
        $pengakuan->jumlah_sitasi = $req->input('jumlah_sitasi');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Karya Ilmiah Dtps has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenKaryaIlmiahDtps $sdmKinerjaDosenKaryaIlmiahDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenKaryaIlmiahDtps $sdmKinerjaDosenKaryaIlmiahDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama' => 'required',
            'judul' => 'required',
            'jumlah_sitasi' => 'required',

        ]);

        $pengakuan = SdmKinerjaDosenKaryaIlmiahDtps::find($id);
        $pengakuan->nama = $req->input('nama');
        $pengakuan->judul = $req->input('judul');
        $pengakuan->jumlah_sitasi = $req->input('jumlah_sitasi');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Karya Ilmiah Dtps has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmKinerjaDosenKaryaIlmiahDtps::find($id)->delete();
        return back()->with('error', 'Sdm Kinerja Dosen Karya Ilmiah Dtps has been deleted.');
    }
}
