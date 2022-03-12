<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::with('tahun')->get();
        $pendaftar = Mahasiswa::sum('c_pendaftar');
        $lulus_seleksi = Mahasiswa::sum('c_lulus_seleksi');
        $reguler = Mahasiswa::sum('mahasiswa_reguler');
        $transfer = Mahasiswa::sum('mahasiswa_transfer');
        $aktif_reguler = Mahasiswa::sum('mahasiswa_aktif_reguler');
        $aktif_transfer = Mahasiswa::sum('mahasiswa_aktif_transfer');
        $total = $aktif_reguler + $aktif_transfer;

        return [
            'mahasiswa' => $mahasiswa,
            'pendaftar' => $pendaftar,
            'lulus_seleksi' => $lulus_seleksi,
            'reguler' => $reguler,
            'transfer' => $transfer,
            'aktif_reguler' => $aktif_reguler,
            'aktif_transfer' => $aktif_transfer,
            'total' => $total,
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
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
