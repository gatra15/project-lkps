<?php

namespace App\Http\Controllers;

use App\Models\SdmDosen;
use Illuminate\Http\Request;

class SdmDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        
        $where1 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'kesesuaian_ps' => 0, 'kesesuaian_ps' => 1];
        $where2 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'kesesuaian_ps' => 1];
        $dosen = SdmDosen::where($where)->get();
        $ndt = SdmDosen::where($where1)->count();
        $ndtps = SdmDosen::where($where2)->count();
        $nds3 = SdmDosen::where($where)->count('pendidikan_pasca_sarjana_doktor');

        return [
            'dosen' => $dosen,
            'ndt' => $ndt,
            'ndtps' => $ndtps,
            'nds3' => $nds3,
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
     * @param  \App\Models\SdmDosen  $sdmDosen
     * @return \Illuminate\Http\Response
     */
    public function show(SdmDosen $sdmDosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmDosen  $sdmDosen
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmDosen $sdmDosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmDosen  $sdmDosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SdmDosen $sdmDosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmDosen  $sdmDosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(SdmDosen $sdmDosen)
    {
        //
    }
}
