<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmDosenIndustriPraktisi;

class SdmDosenIndustriPraktisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $praktisi = SdmDosenIndustriPraktisi::all();
        return view('tab.profildosentab.dosenindustri', ['praktisi' => $praktisi]);
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
            'no_id' => 'required',
            'perusahaan' => 'required',
            'pendidikan_tertinggi' => 'required',
            'bidang_keahlian' => 'required',
            'sertifikat_profesi' => 'required',
            'mata_kuliah_diampu' => 'required',
            'sks' => 'required',
        ]);

        $dosen = new SdmDosenIndustriPraktisi;
        $dosen->nama = $req->input('nama');
        $dosen->no_id = $req->input('no_id');
        $dosen->perusahaan = $req->input('perusahaan');
        $dosen->pendidikan_tertinggi = $req->input('pendidikan_tertinggi');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->sertifikat_profesi = $req->input('sertifikat_profesi');
        $dosen->mata_kuliah_diampu = $req->input('mata_kuliah_diampu');
        $dosen->sks = $req->input('sks');
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return redirect('/profil-dosen/dosen-industri')->with('success', 'New Dosen Industri Praktisi has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmDosenIndustriPraktisi  $sdmDosenIndustriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function show(SdmDosenIndustriPraktisi $sdmDosenIndustriPraktisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmDosenIndustriPraktisi  $sdmDosenIndustriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmDosenIndustriPraktisi $sdmDosenIndustriPraktisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmDosenIndustriPraktisi  $sdmDosenIndustriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama' => 'required',
            'no_id' => 'required',
            'perusahaan' => 'required',
            'pendidikan_tertinggi' => 'required',
            'bidang_keahlian' => 'required',
            'sertifikat_profesi' => 'required',
            'mata_kuliah_diampu' => 'required',
            'sks' => 'required',
        ]);

        $dosen = SdmDosenIndustriPraktisi::find($id);
        $dosen->nama = $req->input('nama');
        $dosen->no_id = $req->input('no_id');
        $dosen->perusahaan = $req->input('perusahaan');
        $dosen->pendidikan_tertinggi = $req->input('pendidikan_tertinggi');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->sertifikat_profesi = $req->input('sertifikat_profesi');
        $dosen->mata_kuliah_diampu = $req->input('mata_kuliah_diampu');
        $dosen->sks = $req->input('sks');
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return redirect('/profil-dosen/dosen-industri')->with('success', 'Dosen Industri Praktisi has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmDosenIndustriPraktisi  $sdmDosenIndustriPraktisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmDosenIndustriPraktisi::find($id);
        return back()->with('error', 'Dosen Industri Praktisi has been deleted.');
    }
}
