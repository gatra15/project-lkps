<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SimulasiPenilaian;

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
        // dd($request);
        $tahun = session('tahun_laporan');
        $request->validate([
            'point_1' => 'required' ,
            'point_2' => 'required' ,
            'point_3' => 'required' ,
            'point_4' => 'required' ,
            'point_5' => 'required' ,
            'point_6a' => 'required' ,
            'point_6b' => 'required' ,
            'point_7a' => 'required' ,
            'point_7b' => 'required' ,
            'point_8' => 'required' ,
            // 'point_9' => 'required' ,
            'point_10' => 'required' ,

            'point_11' => 'required' ,
            'point_12' => 'required' ,
            'point_13' => 'required' ,
            'point_14' => 'required' ,
            'point_15a' => 'required' ,
            'point_15b' => 'required' ,
            'point_16a' => 'required' ,
            'point_16b' => 'required' ,
            'point_17' => 'required' ,
            'point_18' => 'required' ,
            'point_19' => 'required' ,
            'point_20' => 'required' ,
            
            'point_21' => 'required' ,
            'point_22' => 'required' ,
            'point_23' => 'required' ,
            'point_24' => 'required' ,
            'point_25' => 'required' ,
            'point_26' => 'required' ,
            'point_27' => 'required' ,
            'point_28' => 'required' ,
            'point_29' => 'required' ,
            'point_30' => 'required' ,

            'point_31a' => 'required' ,
            'point_31b' => 'required' ,
            'point_32' => 'required' ,
            'point_33' => 'required' ,
            'point_34' => 'required' ,
            'point_35' => 'required' ,
            'point_36' => 'required' ,
            'point_37' => 'required' ,
            'point_38a' => 'required' ,
            'point_38b' => 'required' ,
            'point_38c' => 'required' ,
            'point_39' => 'required' ,
            'point_40a' => 'required' ,
            'point_40b' => 'required' ,

            'point_41a' => 'required' ,
            'point_41b' => 'required' ,
            'point_41c' => 'required' ,
            'point_41d' => 'required' ,
            'point_41e' => 'required' ,
            'point_42' => 'required' ,
            'point_43' => 'required' ,
            'point_44a' => 'required' ,
            'point_44b' => 'required' ,
            'point_44c' => 'required' ,
            'point_45' => 'required' ,
            'point_46' => 'required' ,
            'point_47a' => 'required' ,
            'point_47b' => 'required' ,
            'point_48' => 'required' ,
            'point_49' => 'required' ,
            'point_50' => 'required' ,

            'point_51' => 'required' ,
            'point_52' => 'required' ,
            'point_53' => 'required' ,
            'point_54' => 'required' ,
            'point_55' => 'required' ,
            'point_56' => 'required' ,
            'point_57' => 'required' ,
            'point_58' => 'required' ,
            'point_59' => 'required' ,
            'point_60' => 'required' ,

            'point_61' => 'required' ,
            'point_62' => 'required' ,
            'point_63' => 'required' ,
            'point_64' => 'required' ,
            'point_65' => 'required' ,
            'point_66' => 'required' ,
            'point_67' => 'required' ,
            'point_68' => 'required' ,
            'point_69' => 'required' ,
        ]);

        $data = new SimulasiPenilaian();
        $data->point_1 = $request->input('point_1');
        $data->point_2 = $request->input('point_2');
        $data->point_3 = $request->input('point_3');
        $data->point_4 = $request->input('point_4');
        $data->point_5 = $request->input('point_5');
        $data->point_6a = $request->input('point_6a');
        $data->point_6b = $request->input('point_6b');
        $data->point_7a = $request->input('point_7a');
        $data->point_7b = $request->input('point_7b');
        $data->point_8 = $request->input('point_8');
        $data->point_9 = $request->input('point_9');
        $data->point_10 = $request->input('point_10');

        $data->point_11 = $request->input('point_11');
        $data->point_12 = $request->input('point_12');
        $data->point_13 = $request->input('point_13');
        $data->point_14 = $request->input('point_14');
        $data->point_15a = $request->input('point_15a');
        $data->point_15b = $request->input('point_15b');
        $data->point_16a = $request->input('point_16a');
        $data->point_16b = $request->input('point_16b');
        $data->point_17 = $request->input('point_17');
        $data->point_18 = $request->input('point_18');
        $data->point_19 = $request->input('point_19');
        $data->point_20 = $request->input('point_20');

        $data->point_21 = $request->input('point_21');
        $data->point_22 = $request->input('point_22');
        $data->point_23 = $request->input('point_23');
        $data->point_24 = $request->input('point_24');
        $data->point_25 = $request->input('point_25');
        $data->point_26 = $request->input('point_26');
        $data->point_27 = $request->input('point_27');
        $data->point_28 = $request->input('point_28');
        $data->point_29 = $request->input('point_29');
        $data->point_30 = $request->input('point_30');

        $data->point_31a = $request->input('point_31a');
        $data->point_31b = $request->input('point_31b');
        $data->point_32 = $request->input('point_32');
        $data->point_33 = $request->input('point_33');
        $data->point_34 = $request->input('point_34');
        $data->point_35 = $request->input('point_35');
        $data->point_36 = $request->input('point_36');
        $data->point_37 = $request->input('point_37');
        $data->point_38a = $request->input('point_38a');
        $data->point_38b = $request->input('point_38b');
        $data->point_38c = $request->input('point_38c');
        $data->point_39 = $request->input('point_39');
        $data->point_40a = $request->input('point_40a');
        $data->point_40b = $request->input('point_40b');

        $data->point_41a = $request->input('point_41a');
        $data->point_41b = $request->input('point_41b');
        $data->point_41c = $request->input('point_41c');
        $data->point_41d = $request->input('point_41d');
        $data->point_41e = $request->input('point_41e');
        $data->point_42 = $request->input('point_42');
        $data->point_43 = $request->input('point_43');
        $data->point_44 = $request->input('point_44');
        $data->point_45 = $request->input('point_45');
        $data->point_46 = $request->input('point_46');
        $data->point_47a = $request->input('point_47a');
        $data->point_47b = $request->input('point_47b');
        $data->point_48 = $request->input('point_48');
        $data->point_49 = $request->input('point_49');
        $data->point_50 = $request->input('point_50');

        $data->point_51 = $request->input('point_51');
        $data->point_52 = $request->input('point_52');
        $data->point_53 = $request->input('point_53');
        $data->point_54 = $request->input('point_54');
        $data->point_55 = $request->input('point_55');
        $data->point_56 = $request->input('point_56');
        $data->point_57 = $request->input('point_57');
        $data->point_58 = $request->input('point_58');
        $data->point_59 = $request->input('point_59');
        $data->point_60 = $request->input('point_60');

        $data->point_61 = $request->input('point_61');
        $data->point_62 = $request->input('point_62');
        $data->point_63 = $request->input('point_63');
        $data->point_64 = $request->input('point_64');
        $data->point_65 = $request->input('point_65');
        $data->point_66 = $request->input('point_66');
        $data->point_67 = $request->input('point_67');
        $data->point_68 = $request->input('point_68');
        $data->point_69 = $request->input('point_69');   

        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->save();
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
        $tahun = session('tahun_laporan');
        $request->validate([
            'point_1' => 'required' ,
            'point_2' => 'required' ,
            'point_3' => 'required' ,
            'point_4' => 'required' ,
            'point_5' => 'required' ,
            'point_6a' => 'required' ,
            'point_6b' => 'required' ,
            'point_7a' => 'required' ,
            'point_7b' => 'required' ,
            'point_8' => 'required' ,
            // 'point_9' => 'required' ,
            'point_10' => 'required' ,

            'point_11' => 'required' ,
            'point_12' => 'required' ,
            'point_13' => 'required' ,
            'point_14' => 'required' ,
            'point_15a' => 'required' ,
            'point_15b' => 'required' ,
            'point_16a' => 'required' ,
            'point_16b' => 'required' ,
            'point_17' => 'required' ,
            'point_18' => 'required' ,
            'point_19' => 'required' ,
            'point_20' => 'required' ,
            
            'point_21' => 'required' ,
            'point_22' => 'required' ,
            'point_23' => 'required' ,
            'point_24' => 'required' ,
            'point_25' => 'required' ,
            'point_26' => 'required' ,
            'point_27' => 'required' ,
            'point_28' => 'required' ,
            'point_29' => 'required' ,
            'point_30' => 'required' ,

            'point_31a' => 'required' ,
            'point_31b' => 'required' ,
            'point_32' => 'required' ,
            'point_33' => 'required' ,
            'point_34' => 'required' ,
            'point_35' => 'required' ,
            'point_36' => 'required' ,
            'point_37' => 'required' ,
            'point_38a' => 'required' ,
            'point_38b' => 'required' ,
            'point_38c' => 'required' ,
            'point_39' => 'required' ,
            'point_40a' => 'required' ,
            'point_40b' => 'required' ,

            'point_41a' => 'required' ,
            'point_41b' => 'required' ,
            'point_41c' => 'required' ,
            'point_41d' => 'required' ,
            'point_41e' => 'required' ,
            'point_42' => 'required' ,
            'point_43' => 'required' ,
            'point_44a' => 'required' ,
            'point_44b' => 'required' ,
            'point_44c' => 'required' ,
            'point_45' => 'required' ,
            'point_46' => 'required' ,
            'point_47a' => 'required' ,
            'point_47b' => 'required' ,
            'point_48' => 'required' ,
            'point_49' => 'required' ,
            'point_50' => 'required' ,

            'point_51' => 'required' ,
            'point_52' => 'required' ,
            'point_53' => 'required' ,
            'point_54' => 'required' ,
            'point_55' => 'required' ,
            'point_56' => 'required' ,
            'point_57' => 'required' ,
            'point_58' => 'required' ,
            'point_59' => 'required' ,
            'point_60' => 'required' ,

            'point_61' => 'required' ,
            'point_62' => 'required' ,
            'point_63' => 'required' ,
            'point_64' => 'required' ,
            'point_65' => 'required' ,
            'point_66' => 'required' ,
            'point_67' => 'required' ,
            'point_68' => 'required' ,
            'point_69' => 'required' ,
        ]);

        $data = SimulasiPenilaian::find($id);
        $data->point_1 = $request->input('point_1');
        $data->point_2 = $request->input('point_2');
        $data->point_3 = $request->input('point_3');
        $data->point_4 = $request->input('point_4');
        $data->point_5 = $request->input('point_5');
        $data->point_6a = $request->input('point_6a');
        $data->point_6b = $request->input('point_6b');
        $data->point_7a = $request->input('point_7a');
        $data->point_7b = $request->input('point_7b');
        $data->point_8 = $request->input('point_8');
        $data->point_9 = $request->input('point_9');
        $data->point_10 = $request->input('point_10');

        $data->point_11 = $request->input('point_11');
        $data->point_12 = $request->input('point_12');
        $data->point_13 = $request->input('point_13');
        $data->point_14 = $request->input('point_14');
        $data->point_15a = $request->input('point_15a');
        $data->point_15b = $request->input('point_15b');
        $data->point_16a = $request->input('point_16a');
        $data->point_16b = $request->input('point_16b');
        $data->point_17 = $request->input('point_17');
        $data->point_18 = $request->input('point_18');
        $data->point_19 = $request->input('point_19');
        $data->point_20 = $request->input('point_20');

        $data->point_21 = $request->input('point_21');
        $data->point_22 = $request->input('point_22');
        $data->point_23 = $request->input('point_23');
        $data->point_24 = $request->input('point_24');
        $data->point_25 = $request->input('point_25');
        $data->point_26 = $request->input('point_26');
        $data->point_27 = $request->input('point_27');
        $data->point_28 = $request->input('point_28');
        $data->point_29 = $request->input('point_29');
        $data->point_30 = $request->input('point_30');

        $data->point_31a = $request->input('point_31a');
        $data->point_31b = $request->input('point_31b');
        $data->point_32 = $request->input('point_32');
        $data->point_33 = $request->input('point_33');
        $data->point_34 = $request->input('point_34');
        $data->point_35 = $request->input('point_35');
        $data->point_36 = $request->input('point_36');
        $data->point_37 = $request->input('point_37');
        $data->point_38a = $request->input('point_38a');
        $data->point_38b = $request->input('point_38b');
        $data->point_38c = $request->input('point_38c');
        $data->point_39 = $request->input('point_39');
        $data->point_40a = $request->input('point_40a');
        $data->point_40b = $request->input('point_40b');

        $data->point_41a = $request->input('point_41a');
        $data->point_41b = $request->input('point_41b');
        $data->point_41c = $request->input('point_41c');
        $data->point_41d = $request->input('point_41d');
        $data->point_41e = $request->input('point_41e');
        $data->point_42 = $request->input('point_42');
        $data->point_43 = $request->input('point_43');
        $data->point_44 = $request->input('point_44');
        $data->point_45 = $request->input('point_45');
        $data->point_46 = $request->input('point_46');
        $data->point_47a = $request->input('point_47a');
        $data->point_47b = $request->input('point_47b');
        $data->point_48 = $request->input('point_48');
        $data->point_49 = $request->input('point_49');
        $data->point_50 = $request->input('point_50');

        $data->point_51 = $request->input('point_51');
        $data->point_52 = $request->input('point_52');
        $data->point_53 = $request->input('point_53');
        $data->point_54 = $request->input('point_54');
        $data->point_55 = $request->input('point_55');
        $data->point_56 = $request->input('point_56');
        $data->point_57 = $request->input('point_57');
        $data->point_58 = $request->input('point_58');
        $data->point_59 = $request->input('point_59');
        $data->point_60 = $request->input('point_60');

        $data->point_61 = $request->input('point_61');
        $data->point_62 = $request->input('point_62');
        $data->point_63 = $request->input('point_63');
        $data->point_64 = $request->input('point_64');
        $data->point_65 = $request->input('point_65');
        $data->point_66 = $request->input('point_66');
        $data->point_67 = $request->input('point_67');
        $data->point_68 = $request->input('point_68');
        $data->point_69 = $request->input('point_69');   

        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();
        
        return back()->with('success', 'Data Simulasi Penilaian berhasi dihapus.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SimulasiPenilaian  $simulasiPenilaian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SimulasiPenilaian::find($id)->delete();

        return back()->with('success', 'Data Simulasi Penilaian berhasi dihapus.');
    }
}
