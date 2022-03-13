<?php

namespace App\Http\Controllers;

use App\Models\PendidikanKurikulum;
use Illuminate\Http\Request;

class PendidikanKurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = PendidikanKurikulum::all();
        $makul = PendidikanKurikulum::select('mata_kuliah_kompetensial')->count();
        $bobot_kuliah = PendidikanKurikulum::sum('bobot_kuliah');
        $bobot_seminar = PendidikanKurikulum::sum('bobot_seminar');
        $bobot_praktikum = PendidikanKurikulum::sum('bobot_praktikum');
        $konversi_kredit_jam = PendidikanKurikulum::sum('konversi_kredit_jam');
        $unit = PendidikanKurikulum::select('unit_penyelenggara')->count();

        return [
            'kurikulum' => $kurikulum,
            'makul' => $makul,
            'bobot_kuliah' => $bobot_kuliah,
            'bobot_seminar' => $bobot_seminar,
            'bobot_praktikum' => $bobot_praktikum,
            'konversi_kredit_jam' => $konversi_kredit_jam,
            'unit' => $unit,
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
     * @param  \App\Models\PendidikanKurikulum  $pendidikanKurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(PendidikanKurikulum $pendidikanKurikulum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendidikanKurikulum  $pendidikanKurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit(PendidikanKurikulum $pendidikanKurikulum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendidikanKurikulum  $pendidikanKurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendidikanKurikulum $pendidikanKurikulum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendidikanKurikulum  $pendidikanKurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendidikanKurikulum $pendidikanKurikulum)
    {
        //
    }
}
