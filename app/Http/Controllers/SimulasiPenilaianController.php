<?php

namespace App\Http\Controllers;

use App\Models\SimulasiPenilaian;
use Illuminate\Http\Request;

class SimulasiPenilaianController extends Controller
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

        $simulasi = SimulasiPenilaian::where($where)->get();
        return ['simulasi' => $simulasi];
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
        $request->validate([
            'point_1' => 'required' ,
            'point_1_akhir' => 'required' ,
            'point_2' => 'required' ,
            'point_2_akhir' => 'required' ,
            'point_3' => 'required' ,
            'point_3_akhir' => 'required' ,
            'point_4' => 'required' ,
            'point_4_akhir' => 'required' ,
            'point_5' => 'required' ,
            'point_5_akhir' => 'required' ,
            'point_6' => 'required' ,
            'point_6_akhir' => 'required' ,
            'point_7' => 'required' ,
            'point_7_akhir' => 'required' ,
            'point_8' => 'required' ,
            'point_8_akhir' => 'required' ,
            'point_9' => 'required' ,
            'point_9_akhir' => 'required' ,
            'point_10' => 'required' ,
            'point_10_akhir' => 'required' ,

            'point_11' => 'required' ,
            'point_11_akhir' => 'required' ,
            'point_12' => 'required' ,
            'point_12_akhir' => 'required' ,
            'point_13' => 'required' ,
            'point_13_akhir' => 'required' ,
            'point_14' => 'required' ,
            'point_14_akhir' => 'required' ,
            'point_15' => 'required' ,
            'point_15_akhir' => 'required' ,
            'point_16' => 'required' ,
            'point_16_akhir' => 'required' ,
            'point_17' => 'required' ,
            'point_17_akhir' => 'required' ,
            'point_18' => 'required' ,
            'point_18_akhir' => 'required' ,
            'point_19' => 'required' ,
            'point_19_akhir' => 'required' ,
            'point_20' => 'required' ,
            'point_20_akhir' => 'required' ,
            
            'point_21' => 'required' ,
            'point_21_akhir' => 'required' ,
            'point_22' => 'required' ,
            'point_22_akhir' => 'required' ,
            'point_23' => 'required' ,
            'point_23_akhir' => 'required' ,
            'point_24' => 'required' ,
            'point_24_akhir' => 'required' ,
            'point_25' => 'required' ,
            'point_25_akhir' => 'required' ,
            'point_26' => 'required' ,
            'point_26_akhir' => 'required' ,
            'point_27' => 'required' ,
            'point_27_akhir' => 'required' ,
            'point_28' => 'required' ,
            'point_28_akhir' => 'required' ,
            'point_29' => 'required' ,
            'point_29_akhir' => 'required' ,
            'point_30' => 'required' ,
            'point_30_akhir' => 'required' ,

            'point_31' => 'required' ,
            'point_31_akhir' => 'required' ,
            'point_32' => 'required' ,
            'point_32_akhir' => 'required' ,
            'point_33' => 'required' ,
            'point_33_akhir' => 'required' ,
            'point_34' => 'required' ,
            'point_34_akhir' => 'required' ,
            'point_35' => 'required' ,
            'point_35_akhir' => 'required' ,
            'point_36' => 'required' ,
            'point_36_akhir' => 'required' ,
            'point_37' => 'required' ,
            'point_37_akhir' => 'required' ,
            'point_38' => 'required' ,
            'point_38_akhir' => 'required' ,
            'point_39' => 'required' ,
            'point_39_akhir' => 'required' ,
            'point_40' => 'required' ,
            'point_40_akhir' => 'required' ,

            'point_41' => 'required' ,
            'point_41_akhir' => 'required' ,
            'point_42' => 'required' ,
            'point_42_akhir' => 'required' ,
            'point_43' => 'required' ,
            'point_43_akhir' => 'required' ,
            'point_44' => 'required' ,
            'point_44_akhir' => 'required' ,
            'point_45' => 'required' ,
            'point_45_akhir' => 'required' ,
            'point_46' => 'required' ,
            'point_46_akhir' => 'required' ,
            'point_47' => 'required' ,
            'point_47_akhir' => 'required' ,
            'point_48' => 'required' ,
            'point_48_akhir' => 'required' ,
            'point_49' => 'required' ,
            'point_49_akhir' => 'required' ,
            'point_50' => 'required' ,
            'point_50_akhir' => 'required' ,

            'point_51' => 'required' ,
            'point_51_akhir' => 'required' ,
            'point_52' => 'required' ,
            'point_52_akhir' => 'required' ,
            'point_53' => 'required' ,
            'point_53_akhir' => 'required' ,
            'point_54' => 'required' ,
            'point_54_akhir' => 'required' ,
            'point_55' => 'required' ,
            'point_55_akhir' => 'required' ,
            'point_56' => 'required' ,
            'point_56_akhir' => 'required' ,
            'point_57' => 'required' ,
            'point_57_akhir' => 'required' ,
            'point_58' => 'required' ,
            'point_58_akhir' => 'required' ,
            'point_59' => 'required' ,
            'point_59_akhir' => 'required' ,
            'point_60' => 'required' ,
            'point_60_akhir' => 'required' ,

            'point_61' => 'required' ,
            'point_61_akhir' => 'required' ,
            'point_62' => 'required' ,
            'point_62_akhir' => 'required' ,
            'point_63' => 'required' ,
            'point_63_akhir' => 'required' ,
            'point_64' => 'required' ,
            'point_64_akhir' => 'required' ,
            'point_65' => 'required' ,
            'point_65_akhir' => 'required' ,
            'point_66' => 'required' ,
            'point_66_akhir' => 'required' ,
            'point_67' => 'required' ,
            'point_67_akhir' => 'required' ,
            'point_68' => 'required' ,
            'point_68_akhir' => 'required' ,
            'point_69' => 'required' ,
            'point_69_akhir' => 'required' ,
        ]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SimulasiPenilaian  $simulasiPenilaian
     * @return \Illuminate\Http\Response
     */
    public function show(SimulasiPenilaian $simulasiPenilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SimulasiPenilaian  $simulasiPenilaian
     * @return \Illuminate\Http\Response
     */
    public function edit(SimulasiPenilaian $simulasiPenilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SimulasiPenilaian  $simulasiPenilaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = SimulasiPenilaian::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SimulasiPenilaian  $simulasiPenilaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimulasiPenilaian $simulasiPenilaian)
    {
        //
    }
}
