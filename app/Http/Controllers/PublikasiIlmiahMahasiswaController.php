<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PublikasiIlmiahMahasiswa;
use Laravel\Sail\Console\PublishCommand;
use Svg\Tag\Rect;

class PublikasiIlmiahMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PublikasiIlmiahMahasiswa::with('media')->get();
        $jumlah_ts2 = PublikasiIlmiahMahasiswa::sum('jumlah_ts2');
        $jumlah_ts1 = PublikasiIlmiahMahasiswa::sum('jumlah_ts1');
        $jumlah_ts = PublikasiIlmiahMahasiswa::sum('jumlah_ts');
        $jumlah = PublikasiIlmiahMahasiswa::sum('jumlah');
        return [
            'data' => $data,
            'jumlah_ts2' => $jumlah_ts2,
            'jumlah_ts1' => $jumlah_ts1,
            'jumlah_ts' => $jumlah_ts,
            'jumlah' => $jumlah
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(PublikasiIlmiahMahasiswa $publikasiIlmiahMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PublikasiIlmiahMahasiswa $publikasiIlmiahMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'media_id' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
        ]);

        $data = PublikasiIlmiahMahasiswa::find($id);
        $data->media_id = $request->input('media_id');
        $data->jumlah_ts2 = $request->input('jumlah_ts2');
        $data->jumlah_ts1 = $request->input('jumlah_ts1');
        $data->jumlah_ts = $request->input('jumlah_ts');
        $data->jumlah = $request->jumlah_ts + $request->jumlah_ts + $request->jumlah_ts;
        $data->tahun_laporan = 2022;
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->update();
        return back()->with('success', 'Data Publikasi Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = PublikasiIlmiahMahasiswa::find($id);
        $data->media_id = $request->input('media_id');
        $data->jumlah_ts2 = null;
        $data->jumlah_ts1 = null;
        $data->jumlah_ts = null;
        $data->jumlah = null;
        $data->tahun_laporan = 2022;
        $data->prodi = auth()->user()->prodi;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();
        return back()->with('error', 'Data Publikasi Mahasiswa berhasil dihapus.');
    }
}
