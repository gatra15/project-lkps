<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $kepuasan = PendidikanKepuasanMahasiswa::with('aspek')->get();
        $sangat_baik = PendidikanKepuasanMahasiswa::sum('sangat_baik');
        $baik = PendidikanKepuasanMahasiswa::sum('baik');
        $cukup = PendidikanKepuasanMahasiswa::sum('cukup');
        $kurang = PendidikanKepuasanMahasiswa::sum('kurang');

        return [
            'kepuasan' => $kepuasan,
            'sangat_baik' => $sangat_baik,
            'baik' => $baik,
            'cukup' => $cukup,
            'kurang' => $kurang,
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
        $connection = 'mysql';
        $this->validate($req, [
            'aspek_id' => 'required',
        ]);

        try{
        $kepuasan = new PendidikanKepuasanMahasiswa;
        $kepuasan->aspek_id = $req->input('aspek_id');
        $kepuasan->sangat_baik = $req->input('sangat_baik');
        $kepuasan->baik = $req->input('baik');
        $kepuasan->cukup = $req->input('cukup');
        $kepuasan->kurang = $req->input('kurang');
        $kepuasan->rencana_tindak_lanjut = $req->input('rencana_tindak_lanjut');
        $kepuasan->tahun_laporan = '2022';
        $kepuasan->prodi = auth()->user()->prodi;
        $kepuasan->created_by = auth()->user()->name;
        $kepuasan->created_at = Carbon::now();
        $kepuasan->save();
        // dd($kepuasan);
        return back()->with('success', 'Data Kepuasan Mahasiswa berhasil ditambahkan.');
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
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
        $connection = 'mysql';
        $this->validate($req, [
            'aspek_id' => 'required',
            'sangat_baik' => 'required',
            'baik' => 'required',
            'cukup' => 'required',
            'kurang' => 'required',
            'rencana_tindak_lanjut' => 'required',
        ]);
    try{
        $kepuasan = PendidikanKepuasanMahasiswa::find($id);
        $kepuasan->aspek_id = $req->input('aspek_id');
        $kepuasan->sangat_baik = $req->input('sangat_baik');
        $kepuasan->baik = $req->input('baik');
        $kepuasan->cukup = $req->input('cukup');
        $kepuasan->kurang = $req->input('kurang');
        $kepuasan->rencana_tindak_lanjut = $req->input('rencana_tindak_lanjut');
        $kepuasan->tahun_laporan = 2022;
        $kepuasan->prodi = auth()->user()->prodi;
        $kepuasan->created_by = auth()->user()->name;
        $kepuasan->created_at = Carbon::now();
        $kepuasan->update();

        return back()->with('success', 'Data Kepuasan Mahasiswa berhasil ditambahkan.');
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
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $kepuasan = PendidikanKepuasanMahasiswa::find($id);
        $kepuasan->aspek_id = $req->input('aspek_id');
        $kepuasan->sangat_baik = null;
        $kepuasan->baik = null;
        $kepuasan->cukup = null;
        $kepuasan->kurang = null;
        $kepuasan->rencana_tindak_lanjut = null;
        $kepuasan->prodi = auth()->user()->prodi;
        $kepuasan->updated_by = auth()->user()->name;
        $kepuasan->updated_at = Carbon::now();
        $kepuasan->update();
        return back()->with('error', 'Data Kepuasan Mahasiswa berhasil dihapus.');
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
