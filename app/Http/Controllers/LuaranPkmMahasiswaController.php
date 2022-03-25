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
        $tahun = session('tahun_laporan');
        $data = LuaranPkmMahasiswa::all();
        $na = LuaranPkmMahasiswa::where('tahun_laporan', $tahun)->orWhere('type_luaran', 'I')->count('tahun');
        $nb = LuaranPkmMahasiswa::where('tahun_laporan', $tahun)->orWhere('type_luaran', 'II')->count('tahun');
        $nc = LuaranPkmMahasiswa::where('tahun_laporan', $tahun)->orWhere('type_luaran', 'III')->count('tahun');
        $nd = LuaranPkmMahasiswa::where('tahun_laporan', $tahun)->orWhere('type_luaran', 'IV')->count('tahun');
        return [
            'data' => $data,
            'na' => $na,
            'nb' => $nb,
            'nc' => $nc,
            'nd' => $nd,
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
        $tahun = session('tahun_laporan');
        $this->validate($request, [
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
            // 'bukti' => 'file|max:4096'
        ]);

        

        $luaran = new LuaranPkmMahasiswa;
        $luaran->type_luaran = $request->input('type_luaran');
        $luaran->judul = $request->input('judul');
        $luaran->tahun = $request->input('tahun');
        $luaran->keterangan = $request->input('keterangan');
        if($request->file('bukti')) {
            $filenameWithExt = $request->file('bukti')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('bukti')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
            $luaran->bukti = $request->file('bukti')->storeAs('/bukti-luaran', $filenameSimpan);
        } else {
        }
        $luaran->tahun_laporan = $tahun;
        $luaran->prodi = auth()->user()->prodi->name;
        $luaran->created_by = auth()->user()->name;
        $luaran->created_at = Carbon::now();
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
        $tahun = session('tahun_laporan');
        $this->validate($request, [
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
            // 'bukti' => 'required|max:4096'
        ]);

        

        $luaran = LuaranPkmMahasiswa::find($id);
        $luaran->type_luaran = $request->input('type_luaran');
        $luaran->judul = $request->input('judul');
        $luaran->tahun = $request->input('tahun');
        $luaran->keterangan = $request->input('keterangan');
        if($request->file('bukti')) {
            $filenameWithExt = $request->file('bukti')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('bukti')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
            $luaran->bukti = $request->file('bukti')->storeAs('/bukti-luaran', $filenameSimpan);
        } else {
            
        }
        $luaran->tahun_laporan = $tahun;
        $luaran->prodi = auth()->user()->prodi->name;
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
