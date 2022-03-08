<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PendidikanIntegrasiKegiatanPenelitian;

class PendidikanIntegrasiKegiatanPenelitianController extends Controller
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
            'judul' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'bentuk_integrasi' => 'required',
        ]);

        $integrasi = new PendidikanIntegrasiKegiatanPenelitian;
        $integrasi->judul = $req->input('judul');
        $integrasi->nama_dosen = $req->input('nama_dosen');
        $integrasi->mata_kuliah = $req->input('mata_kuliah');
        $integrasi->bentuk_integrasi = $req->input('bentuk_integrasi');
        $integrasi->tahun_laporan = '2022';
        $integrasi->prodi = auth()->user()->prodi;
        $integrasi->created_by = auth()->user()->name;
        $integrasi->created_at = Carbon::now();
        $integrasi->save();

        return back()->with('success', 'Pendidikan Integrasi Kegiatan Penelitian has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PendidikanIntegrasiKegiatanPenelitian  $pendidikanIntegrasiKegiatanPenelitian
     * @return \Illuminate\Http\Response
     */
    public function show(PendidikanIntegrasiKegiatanPenelitian $pendidikanIntegrasiKegiatanPenelitian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendidikanIntegrasiKegiatanPenelitian  $pendidikanIntegrasiKegiatanPenelitian
     * @return \Illuminate\Http\Response
     */
    public function edit(PendidikanIntegrasiKegiatanPenelitian $pendidikanIntegrasiKegiatanPenelitian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendidikanIntegrasiKegiatanPenelitian  $pendidikanIntegrasiKegiatanPenelitian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'judul' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'bentuk_integrasi' => 'required',
        ]);

        $integrasi = PendidikanIntegrasiKegiatanPenelitian::find($id);
        $integrasi->judul = $req->input('judul');
        $integrasi->nama_dosen = $req->input('nama_dosen');
        $integrasi->mata_kuliah = $req->input('mata_kuliah');
        $integrasi->bentuk_integrasi = $req->input('bentuk_integrasi');
        $integrasi->tahun_laporan = '2022';
        $integrasi->prodi = auth()->user()->prodi;
        $integrasi->created_by = auth()->user()->name;
        $integrasi->updated_at = Carbon::now();
        $integrasi->save();

        return back()->with('success', 'Pendidikan Integrasi Kegiatan Penelitian has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendidikanIntegrasiKegiatanPenelitian  $pendidikanIntegrasiKegiatanPenelitian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PendidikanIntegrasiKegiatanPenelitian::find($id)->delete();
        return back()->with('error', 'Pendidikan Integrasi Kegiatan Penelitian has been deleted.');
    }
}
