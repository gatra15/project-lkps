<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PendidikanIntegrasiExport;
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
        $integrasi = PendidikanIntegrasiKegiatanPenelitian::all();
        return [
            'integrasi' => $integrasi,
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
            'judul' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'bentuk_integrasi' => 'required',
        ]);

        try{
        $integrasi = new PendidikanIntegrasiKegiatanPenelitian;
        $integrasi->judul = $req->input('judul');
        $integrasi->nama_dosen = $req->input('nama_dosen');
        $integrasi->mata_kuliah = $req->input('mata_kuliah');
        $integrasi->bentuk_integrasi = $req->input('bentuk_integrasi');
        $integrasi->tahun_laporan = 2022;
        $integrasi->prodi = auth()->user()->prodi;
        $integrasi->created_by = auth()->user()->name;
        $integrasi->created_at = Carbon::now();
        $integrasi->save();

        return back()->with('success', 'Data Pendidikan Integrasi Kegiatan Penelitian berhasil ditambahkan.');

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
        $connection = 'mysql';
        $this->validate($req, [
            'judul' => 'required',
            'nama_dosen' => 'required',
            'mata_kuliah' => 'required',
            'bentuk_integrasi' => 'required',
        ]);

        try{
        $integrasi = PendidikanIntegrasiKegiatanPenelitian::find($id);
        $integrasi->judul = $req->input('judul');
        $integrasi->nama_dosen = $req->input('nama_dosen');
        $integrasi->mata_kuliah = $req->input('mata_kuliah');
        $integrasi->bentuk_integrasi = $req->input('bentuk_integrasi');
        $integrasi->tahun_laporan = '2022';
        $integrasi->prodi = auth()->user()->prodi;
        $integrasi->updated_by = auth()->user()->name;
        $integrasi->updated_at = Carbon::now();
        $integrasi->update();

        return back()->with('success', 'Data Pendidikan Integrasi Kegiatan Penelitian berhasil diubah.');
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
     * @param  \App\Models\PendidikanIntegrasiKegiatanPenelitian  $pendidikanIntegrasiKegiatanPenelitian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PendidikanIntegrasiKegiatanPenelitian::find($id)->delete();
        return back()->with('success', 'Data Pendidikan Integrasi Kegiatan Penelitian berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new PendidikanIntegrasiExport, 'pendidikan-integrasi-kegiatan-penelitian.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new PendidikanIntegrasiExport, 'pendidikan-integrasi-kegiatan-penelitian.csv');
    }
}
