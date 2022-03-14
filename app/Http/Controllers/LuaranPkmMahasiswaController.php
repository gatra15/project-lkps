<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LuaranPkmMahasiswa;

class LuaranPkmMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LuaranPkmMahasiswa::all();
        return ['data' => $data];
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
        $this->validate($request, [
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);

        $luaran = new LuaranPkmMahasiswa;
        $luaran->type_luaran = $request->input('type_luaran');
        $luaran->judul = $request->input('judul');
        $luaran->tahun = $request->input('tahun');
        $luaran->keterangan = $request->input('keterangan');
        $luaran->tahun_laporan = 2022;
        $luaran->prodi = auth()->user()->prodi;
        $luaran->created_by = auth()->user()->name;
        $luaran->created_at = Carbon::now();
        // dd($luaran);
        $luaran->save();

        return back()->with('success', 'Data Luaran Pkm Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LuaranPkmMahasiswa  $luaranPkmMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(LuaranPkmMahasiswa $luaranPkmMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LuaranPkmMahasiswa  $luaranPkmMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(LuaranPkmMahasiswa $luaranPkmMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LuaranPkmMahasiswa  $luaranPkmMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);

        $luaran = LuaranPkmMahasiswa::find($id);
        $luaran->type_luaran = $request->input('type_luaran');
        $luaran->judul = $request->input('judul');
        $luaran->tahun = $request->input('tahun');
        $luaran->keterangan = $request->input('keterangan');
        $luaran->tahun_laporan = 2022;
        $luaran->prodi = auth()->user()->prodi;
        $luaran->updated_by = auth()->user()->name;
        $luaran->updated_at = Carbon::now();
        $luaran->update();

        return back()->with('success', 'Data Luaran Pkm Mahasiswa berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LuaranPkmMahasiswa  $luaranPkmMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LuaranPkmMahasiswa::find($id)->delete();
        return back()->with('error', 'Data Luaran Pkm Mahasiswa berhasil dihapus.');
    }
}
