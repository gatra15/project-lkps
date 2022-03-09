<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PendidikanKepuasanMahasiswa;
use App\Exports\PendidikanKepuasanMahasiswaExport;

class PendidikanKepuasanMahasiswaController extends Controller
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
            'aspek_detail' => 'required',
            'tingkat' => 'required',
            'rencana_tindak_lanjut' => 'required',
        ]);

        $kepuasan = new PendidikanKepuasanMahasiswa;
        $kepuasan->aspek = $req->input('aspek');
        $kepuasan->tingkat = $req->input('tingkat');
        $kepuasan->rencana_tindak_lanjut = $req->input('rencana_tindak_lanjut');
        $kepuasan->tahun_laporan = '2022';
        $kepuasan->prodi = auth()->user()->prodi;
        $kepuasan->created_by = auth()->user()->name;
        $kepuasan->created_at = Carbon::now();
        $kepuasan->save();

        return back()->with('success', 'Data Kepuasan Mahasiswa has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(PendidikanKepuasanMahasiswa $pendidikanKepuasanMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PendidikanKepuasanMahasiswa $pendidikanKepuasanMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'aspek' => 'required',
            'tingkat' => 'required',
            'rencana_tindak_lanjut' => 'required',
        ]);

        $kepuasan = PendidikanKepuasanMahasiswa::find($id);
        $kepuasan->aspek = $req->input('aspek');
        $kepuasan->tingkat = $req->input('tingkat');
        $kepuasan->rencana_tindak_lanjut = $req->input('rencana_tindak_lanjut');
        $kepuasan->tahun_laporan = '2022';
        $kepuasan->prodi = auth()->user()->prodi;
        $kepuasan->created_by = auth()->user()->name;
        $kepuasan->updated_at = Carbon::now();
        $kepuasan->update();

        return back()->with('success', 'Data Kepuasan Mahasiswa has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PendidikanKepuasanMahasiswa::find($id)->delete();
        return back()->with('error', 'Data Kepuasan Mahasiswa has been deleted.');
    }
    
    public function exportToExcel()
    {
        return Excel::download(new PendidikanKepuasanMahasiswaExport, 'pendidikan-kepuasan-mahasiswa.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new PendidikanKepuasanMahasiswaExport, 'pendidikan-kepuasan-mahasiswa.csv');
    }
}
