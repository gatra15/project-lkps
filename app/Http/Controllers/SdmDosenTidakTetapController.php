<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmDosenTidakTetap;

class SdmDosenTidakTetapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosenttetap = SdmDosenTidakTetap::all();
        return view('tab.profildosentab.dosentidaktetap', ['dosenttetap' => $dosenttetap]);
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
            'pendidikan_pasca_sarjana' => 'required',
            'bidang_keahlian' => 'required',
            'jabatan_akademik' => 'required',
            'sertifikat_pendidikan_profesi' => 'required',
            'sertifikat_profesi' => 'required',
            'mata_kuliah_diampu_ps_akreditasi' => 'required',
            'kesesuaian_mata_kuliah_diampu' => 'required',
        ]);

        $dosen = new SdmDosenTidakTetap;
        $dosen->nama = $req->input('nama');
        $dosen->no_id = $req->input('no_id');
        $dosen->pendidikan_pasca_sarjana = $req->input('pendidikan_pasca_sarjana');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->jabatan_akademik = $req->input('jabatan_akademik');
        $dosen->sertifikat_pendidikan_profesi = $req->input('sertifikat_pendidikan_profesi');
        $dosen->sertifikat_profesi = $req->input('sertifikat_profesi');
        $dosen->mata_kuliah_diampu_ps_akreditasi = $req->input('mata_kuliah_diampu_ps_akreditasi');
        $dosen->kesesuaian_mata_kuliah_diampu = $req->input('kesesuaian_mata_kuliah_diampu');
        $dosen->slug = 'dosen-tidak-tetap';
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return back()->with('success', 'New Dosen Tidak Tetap has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function show(SdmDosenTidakTetap $sdmDosenTidakTetap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmDosenTidakTetap $sdmDosenTidakTetap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama' => 'required',
            'no_id' => 'required',
            'pendidikan_pasca_sarjana' => 'required',
            'bidang_keahlian' => 'required',
            'jabatan_akademik' => 'required',
            'sertifikat_pendidikan_profesi' => 'required',
            'sertifikat_profesi' => 'required',
            'mata_kuliah_diampu_ps_akreditasi' => 'required',
            'kesesuaian_mata_kuliah_diampu' => 'required',
        ]);

        $dosen = SdmDosenTidakTetap::find($id);
        $dosen->nama = $req->input('nama');
        $dosen->no_id = $req->input('no_id');
        $dosen->pendidikan_pasca_sarjana = $req->input('pendidikan_pasca_sarjana');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->jabatan_akademik = $req->input('jabatan_akademik');
        $dosen->sertifikat_pendidikan_profesi = $req->input('sertifikat_pendidikan_profesi');
        $dosen->sertifikat_profesi = $req->input('sertifikat_profesi');
        $dosen->mata_kuliah_diampu_ps_akreditasi = $req->input('mata_kuliah_diampu_ps_akreditasi');
        $dosen->kesesuaian_mata_kuliah_diampu = $req->input('kesesuaian_mata_kuliah_diampu');
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return back()->with('success', 'Dosen Tidak Tetap has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmDosenTidakTetap::find($id)->delete();
        return back()->with('error', 'Dosen Tidak Tetap has been deleted.');
    }
}
