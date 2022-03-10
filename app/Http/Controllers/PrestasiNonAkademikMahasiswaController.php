<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PrestasiNonAkademikMahasiswa;

class PrestasiNonAkademikMahasiswaController extends Controller
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
            'nama_kegiatan' => 'required',
            'tahun_perolehan' => 'required',
            'tingkat' => 'required',
            'prestasi' => 'required',
        ]);

        $prestasi = new PrestasiNonAkademikMahasiswa;
        $prestasi->nama_kegiatan = $req->input('nama_kegiatan');
        $prestasi->tahun_perolehan = $req->input('tahun_perolehan');
        $prestasi->tingkat = $req->input('tingkat');
        $prestasi->prestasi = $req->input('prestasi');
        $prestasi->tahun_laporan = 2022;
        $prestasi->prodi = auth()->user()->prodi;
        $prestasi->created_by = auth()->user()->name;
        $prestasi->created_at = Carbon::now();
        $prestasi->save();

        return back()->with('success', 'Prestasi Nonakademik Mahasiswa has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrestasiNonAkademikMahasiswa  $prestasiNonAkademikMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(PrestasiNonAkademikMahasiswa $prestasiNonAkademikMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrestasiNonAkademikMahasiswa  $prestasiNonAkademikMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PrestasiNonAkademikMahasiswa $prestasiNonAkademikMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrestasiNonAkademikMahasiswa  $prestasiNonAkademikMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama_kegiatan' => 'required',
            'tahun_perolehan' => 'required',
            'tingkat' => 'required',
            'prestasi' => 'required',
        ]);

        $prestasi = PrestasiNonAkademikMahasiswa::find($id);
        $prestasi->nama_kegiatan = $req->input('nama_kegiatan');
        $prestasi->tahun_perolehan = $req->input('tahun_perolehan');
        $prestasi->tingkat = $req->input('tingkat');
        $prestasi->prestasi = $req->input('prestasi');
        $prestasi->tahun_laporan = 2022;
        $prestasi->prodi = auth()->user()->prodi;
        $prestasi->created_by = auth()->user()->name;
        $prestasi->update_at = Carbon::now();
        $prestasi->update();

        return back()->with('success', 'Prestasi Mahasiswa has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrestasiNonAkademikMahasiswa  $prestasiNonAkademikMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PrestasiNonAkademikMahasiswa::find($id)->delete();
        return back()->with('error', 'Prestasi Mahasiswa has been deleted.');
    }
}
