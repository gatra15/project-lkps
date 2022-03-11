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
        $bobot_kuliah = PendidikanKurikulum::select('bobot_kuliah')->count();
        $bobot_seminar = PendidikanKurikulum::select('bobot_seminar')->count();
        $bobot_praktikum = PendidikanKurikulum::select('bobot_praktikum')->count();
        $konversi_kredit_jam = PendidikanKurikulum::select('konversi_kredit_jam')->count();
        $sikap = PendidikanKurikulum::where('capaian_sikap', 1)->count();
        $pengetahuan = PendidikanKurikulum::where('capaian_pengetahuan', 1)->count();
        $ketrampilan_umum = PendidikanKurikulum::where('capaian_ketrampilan_umum', 1)->count();
        $ketrampilan_khusus = PendidikanKurikulum::where('capaian_ketrampilan_khusus', 1)->count();
        $dokumen = PendidikanKurikulum::where('document_rencana_pembelajaran', 1)->count();
        $unit = PendidikanKurikulum::select('unit_penyelenggara')->count();

        return [
            'kurikulum' => $kurikulum,
            'makul' => $makul,
            'bobot_kuliah' => $bobot_kuliah,
            'bobot_seminar' => $bobot_seminar,
            'bobot_praktikum' => $bobot_praktikum,
            'konversi_kredit_jam' => $konversi_kredit_jam,
            'sikap' => $sikap,
            'pengetahuan' => $pengetahuan,
            'ketrampilan_umum' => $ketrampilan_umum,
            'ketrampilan_khusus' => $ketrampilan_khusus,
            'dokumen' => $dokumen,
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
