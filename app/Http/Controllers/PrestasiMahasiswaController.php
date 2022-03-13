<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PrestasiMahasiswa;
use Illuminate\Support\Facades\DB;

class PrestasiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = PrestasiMahasiswa::all();
        $wilayah = PrestasiMahasiswa::where('tingkat', 'Lokal/Wilayah')->count();
        $nasional = PrestasiMahasiswa::where('tingkat', 'Nasional')->count();
        $internasional = PrestasiMahasiswa::where('tingkat', 'Internasional')->count();

        return [
            'prestasi' => $prestasi,
            'wilayah' => $wilayah,
            'nasional' => $nasional,
            'internasional' => $internasional,
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
            'nama_kegiatan' => 'required',
            'tahun_perolehan' => 'required',
            'tingkat' => 'required',
            'type_prestasi' => 'required',
        ]);
    try{
        $prestasi = new PrestasiMahasiswa;
        $prestasi->nama_kegiatan = $req->input('nama_kegiatan');
        $prestasi->tahun_perolehan = $req->input('tahun_perolehan');
        $prestasi->tingkat = $req->input('tingkat');
        $prestasi->type_prestasi = $req->input('type_prestasi');
        $prestasi->tahun_laporan = 2022;
        $prestasi->prodi = auth()->user()->prodi;
        $prestasi->created_by = auth()->user()->name;
        $prestasi->created_at = Carbon::now();
        $prestasi->save();

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }    

        return back()->with('success', 'Prestasi Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(PrestasiMahasiswa $prestasiMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PrestasiMahasiswa $prestasiMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $connection = 'mysql';
        $this->validate($req, [
            'nama_kegiatan' => 'required',
            'tahun_perolehan' => 'required',
            'tingkat' => 'required',
            'type_prestasi' => 'required',
        ]);
    try {
        $prestasi = PrestasiMahasiswa::find($id);
        $prestasi->nama_kegiatan = $req->input('nama_kegiatan');
        $prestasi->tahun_perolehan = $req->input('tahun_perolehan');
        $prestasi->tingkat = $req->input('tingkat');
        $prestasi->type_prestasi = $req->input('type_prestasi');
        $prestasi->tahun_laporan = 2022;
        $prestasi->prodi = auth()->user()->prodi;
        $prestasi->updated_by = auth()->user()->name;
        $prestasi->updated_at = Carbon::now();
        $prestasi->update();

        return back()->with('success', 'Prestasi Mahasiswa berhasil diubah.');
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
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $connection = 'mysql';
    try{

        PrestasiMahasiswa::find($id)->delete();
        return back()->with('error', 'Prestasi Mahasiswa berhasil dihapus.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }    
    }
}
