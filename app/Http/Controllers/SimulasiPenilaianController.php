<?php

namespace App\Http\Controllers;

use App\Models\IndikatorTataKerjasama;
use Carbon\Carbon;
use App\Models\Mahasiswa;
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
        $cek = SimulasiPenilaian::where($where)->exists();

        if(!$cek)
        {
            SimulasiPenilaian::create([
                'tahun_laporan' => $tahun,
                'prodi' => $prodi,
            ]);
        }

    // Mahasiswa
        $mahasiswa = [
            ['prodi', '=', $prodi],
            ['tahun_laporan', '<=', $tahun],
            ['tahun_laporan', '>=', $tahun-4]
        ];
        $pendaftar = Mahasiswa::where($mahasiswa)->sum('c_pendaftar');
    // End Mahasiswa

    // Point 9
        $RK = $this->RK();     
    // Point 14
        $Rasio = $this->Rasio();
    // Point 15
        $PMA = $this->PMA();
    // Point 17
        $NDTPS = $this->NDTPS();
    // Point 18
        $PDS3 = $this->PDS3();
    // Point 20
        $RMD = $this->RMD();
    // Point 21
        $RDPU = $this->RDPU();
    // Point 22
        $EWMP = $this->EWMP();

        $simulasi = SimulasiPenilaian::where($where)->get();
        return view('tab.simulasi', [
            'simulasi' => $simulasi,
            'mahasiswa' => $pendaftar,
            'title' => 'Simulasi',
            'RK' => $RK,
            'PMA' => $PMA,
        ]);
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
        // // dd($request);
        // $tahun = session('tahun_laporan');
        // $request->validate([
        //     'point_1' => 'required' ,
        //     'point_2' => 'required' ,
        //     'point_3' => 'required' ,
        //     'point_4' => 'required' ,
        //     'point_5' => 'required' ,
        //     'point_6a' => 'required' ,
        //     'point_6b' => 'required' ,
        //     'point_7a' => 'required' ,
        //     'point_7b' => 'required' ,
        //     'point_8' => 'required' ,
        //     // 'point_9' => 'required' ,
        //     'point_10' => 'required' ,

        //     'point_11' => 'required' ,
        //     'point_12' => 'required' ,
        //     'point_13' => 'required' ,
        //     'point_14' => 'required' ,
        //     'point_15a' => 'required' ,
        //     'point_15b' => 'required' ,
        //     'point_16a' => 'required' ,
        //     'point_16b' => 'required' ,
        //     'point_17' => 'required' ,
        //     'point_18' => 'required' ,
        //     'point_19' => 'required' ,
        //     'point_20' => 'required' ,
            
        //     'point_21' => 'required' ,
        //     'point_22' => 'required' ,
        //     'point_23' => 'required' ,
        //     'point_24' => 'required' ,
        //     'point_25' => 'required' ,
        //     'point_26' => 'required' ,
        //     'point_27' => 'required' ,
        //     'point_28' => 'required' ,
        //     'point_29' => 'required' ,
        //     'point_30' => 'required' ,

        //     'point_31a' => 'required' ,
        //     'point_31b' => 'required' ,
        //     'point_32' => 'required' ,
        //     'point_33' => 'required' ,
        //     'point_34' => 'required' ,
        //     'point_35' => 'required' ,
        //     'point_36' => 'required' ,
        //     'point_37' => 'required' ,
        //     'point_38a' => 'required' ,
        //     'point_38b' => 'required' ,
        //     'point_38c' => 'required' ,
        //     'point_39' => 'required' ,
        //     'point_40a' => 'required' ,
        //     'point_40b' => 'required' ,

        //     'point_41a' => 'required' ,
        //     'point_41b' => 'required' ,
        //     'point_41c' => 'required' ,
        //     'point_41d' => 'required' ,
        //     'point_41e' => 'required' ,
        //     'point_42' => 'required' ,
        //     'point_43' => 'required' ,
        //     'point_44a' => 'required' ,
        //     'point_44b' => 'required' ,
        //     'point_44c' => 'required' ,
        //     'point_45' => 'required' ,
        //     'point_46' => 'required' ,
        //     'point_47a' => 'required' ,
        //     'point_47b' => 'required' ,
        //     'point_48' => 'required' ,
        //     'point_49' => 'required' ,
        //     'point_50' => 'required' ,

        //     'point_51' => 'required' ,
        //     'point_52' => 'required' ,
        //     'point_53' => 'required' ,
        //     'point_54' => 'required' ,
        //     'point_55' => 'required' ,
        //     'point_56' => 'required' ,
        //     'point_57' => 'required' ,
        //     'point_58' => 'required' ,
        //     'point_59' => 'required' ,
        //     'point_60' => 'required' ,

        //     'point_61' => 'required' ,
        //     'point_62' => 'required' ,
        //     'point_63' => 'required' ,
        //     'point_64' => 'required' ,
        //     'point_65' => 'required' ,
        //     'point_66' => 'required' ,
        //     'point_67' => 'required' ,
        //     'point_68' => 'required' ,
        //     'point_69' => 'required' ,
        // ]);

        // $data = new SimulasiPenilaian();
        // $data->point_1 = $request->input('point_1');
        // $data->point_1_akhir = $request->point_1 * 1;

        // $data->point_2 = $request->input('point_2');
        // $data->point_2_akhir = $request->point_2 * 1;

        // $data->point_3 = $request->input('point_3');
        // $data->point_3_akhir = $request->point_3 * 1.033;

        // $data->point_4 = $request->input('point_4');
        // $data->point_4_akhir = $request->point_4 * 1.033;

        // $data->point_5 = $request->input('point_5');
        // $data->point_5_akhir = $request->point_5 * 1.033;

        // $data->point_6a = $request->input('point_6a');
        // $data->point_6b = $request->input('point_6b');
        // $data->point_6_akhir = 

        // $data->point_7a = $request->input('point_7a');
        // $data->point_7b = $request->input('point_7b');
        // $data->point_8 = $request->input('point_8');
        // $data->point_9 = $request->input('point_9');
        // $data->point_10 = $request->input('point_10');

        // $data->point_11 = $request->input('point_11');
        // $data->point_12 = $request->input('point_12');
        // $data->point_13 = $request->input('point_13');
        // $data->point_14 = $request->input('point_14');
        // $data->point_15a = $request->input('point_15a');
        // $data->point_15b = $request->input('point_15b');
        // $data->point_16a = $request->input('point_16a');
        // $data->point_16b = $request->input('point_16b');
        // $data->point_17 = $request->input('point_17');
        // $data->point_18 = $request->input('point_18');
        // $data->point_19 = $request->input('point_19');
        // $data->point_20 = $request->input('point_20');

        // $data->point_21 = $request->input('point_21');
        // $data->point_22 = $request->input('point_22');
        // $data->point_23 = $request->input('point_23');
        // $data->point_24 = $request->input('point_24');
        // $data->point_25 = $request->input('point_25');
        // $data->point_26 = $request->input('point_26');
        // $data->point_27 = $request->input('point_27');
        // $data->point_28 = $request->input('point_28');
        // $data->point_29 = $request->input('point_29');
        // $data->point_30 = $request->input('point_30');

        // $data->point_31a = $request->input('point_31a');
        // $data->point_31b = $request->input('point_31b');
        // $data->point_32 = $request->input('point_32');
        // $data->point_33 = $request->input('point_33');
        // $data->point_34 = $request->input('point_34');
        // $data->point_35 = $request->input('point_35');
        // $data->point_36 = $request->input('point_36');
        // $data->point_37 = $request->input('point_37');
        // $data->point_38a = $request->input('point_38a');
        // $data->point_38b = $request->input('point_38b');
        // $data->point_38c = $request->input('point_38c');
        // $data->point_39 = $request->input('point_39');
        // $data->point_40a = $request->input('point_40a');
        // $data->point_40b = $request->input('point_40b');

        // $data->point_41a = $request->input('point_41a');
        // $data->point_41b = $request->input('point_41b');
        // $data->point_41c = $request->input('point_41c');
        // $data->point_41d = $request->input('point_41d');
        // $data->point_41e = $request->input('point_41e');
        // $data->point_42 = $request->input('point_42');
        // $data->point_43 = $request->input('point_43');
        // $data->point_44 = $request->input('point_44');
        // $data->point_45 = $request->input('point_45');
        // $data->point_46 = $request->input('point_46');
        // $data->point_47a = $request->input('point_47a');
        // $data->point_47b = $request->input('point_47b');
        // $data->point_48 = $request->input('point_48');
        // $data->point_49 = $request->input('point_49');
        // $data->point_50 = $request->input('point_50');

        // $data->point_51 = $request->input('point_51');
        // $data->point_52 = $request->input('point_52');
        // $data->point_53 = $request->input('point_53');
        // $data->point_54 = $request->input('point_54');
        // $data->point_55 = $request->input('point_55');
        // $data->point_56 = $request->input('point_56');
        // $data->point_57 = $request->input('point_57');
        // $data->point_58 = $request->input('point_58');
        // $data->point_59 = $request->input('point_59');
        // $data->point_60 = $request->input('point_60');

        // $data->point_61 = $request->input('point_61');
        // $data->point_62 = $request->input('point_62');
        // $data->point_63 = $request->input('point_63');
        // $data->point_64 = $request->input('point_64');
        // $data->point_65 = $request->input('point_65');
        // $data->point_66 = $request->input('point_66');
        // $data->point_67 = $request->input('point_67');
        // $data->point_68 = $request->input('point_68');
        // $data->point_69 = $request->input('point_69');   

        // $data->tahun_laporan = $tahun;
        // $data->prodi = auth()->user()->prodi->name;
        // $data->created_by = auth()->user()->name;
        // $data->created_at = Carbon::now();
        // $data->save();
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

// Function Hitung
    private function hitung1($input)
    {
        $data = $input * 1;
        return $data;
    }

    private function hitung2($input)
    {
        $data = $input * 1.0333;
        return $data;
    }

    private function hitung3($input1, $input2)
    {
        $data = ($input1 + (2 * $input2)) / 3;
        $data = $data * 0.7625;
        return $data;
    }

    private function hitung4($input)
    {
        $data = $input * 0.7625;
        return $data;
    }
    
    private function hitung5($input1, $input2)
    {
        $data = ($input1 + (2 * $input2)) / 3;
        $data = $data * 3.0667;
        return $data;
    }

    private function hitung5a($input)
    {
        $data = $input * 3.0667;
        return $data;
    }

    private function hitung6($input)
    {
        $data = $input * 0.82;
        return $data;
    }

    private function hitung6a($input1, $input2)
    {
        $data = ($input1 + $input2) / 2;
        $data = $data * 0.82;
        return $data;
    }

    private function hitung7($input)
    {
        $data = $input * 1.0167;
        return $data;
    }

    private function hitung8($input1, $input2, $input3)
    {
        $data = ($input1 + (2 * $input2) + (2 * $input3)) / 5;
        $data = $data * 1.84;
        return $data;
    }

    private function hitung8a($input)
    {
        $data = $input * 1.84;
        return $data;
    }

    private function hitung8b($input1, $input2)
    {
        $data = ($input1 + (2 * $input2)) / 3;
        $data = $data * 1.84;
        return $data;
    }

    private function hitung8c($input1, $input2, $input3, $input4, $input5)
    {
        $data = ($input1 + (2 * $input2) + (2 * $input3) + (2 * $input4) + (2 * $input5)) / 9;
        $data = $data * 1.84;
        return $data;
    }

    private function hitung9($input)
    {
        $data = $input * 2.3;
        return $data;
    }

    private function hitung10($input)
    {
        $data = $input * 0.75;
        return $data;
    }

    private function hitung11($input)
    {
        $data = $input * 2.1929;
        return $data;
    }

    private function hitung12($input)
    {
        $data = $input * 1.5;
        return $data;
    }

// End Hitung

// RK
    private function RK()
    {
        $kerjasama = (new TataPamongController)->index();
        $N1 = $kerjasama['jmlpendidikan'];
        $N2 = $kerjasama['jmlpenelitian'];
        $N3 = $kerjasama['jmlpkm'];
        $dosen = (new SdmDosenController)->index();
        $NDTPS = $dosen['ndtps'];
        $RK =  ((3 * $N1) + (2 * $N2) + (1 * $N3)) / $NDTPS;

        if($RK >= 4) {
            return 4;
        } else {
            return $RK;
        }
        
    }
// End RK

// PMA
    private function PMA()
    {
        $mahasiswaAsing = (new MahasiswaAsingController)->index();
        $ma_asing = $mahasiswaAsing['jumlah'];
        $ma = $mahasiswaAsing['jumlahMhs'];
        $PMA = ($ma_asing / $ma);

        if($PMA >= 0.01)
        {
            return 4;
        } else {
            return  2 + (200 * $PMA);
        }
    }
// End PMA

// Rasio
    private function Rasio()
    {
        $mahasiswa = (new MahasiswaController)->index();
        $na = $mahasiswa['pendaftar'];
        $nb = $mahasiswa['lulus_seleksi'];
        $rasio = $na / $nb;

        if($rasio >= 5)
        {
            return 4;
        } else {
            return (4 * $rasio) / 5;
        }
    }
// End Rasio

// NDTPS
    private function NDTPS()
    {
        $dosen = (new SdmDosenController)->index();
        $NDTPS = $dosen['ndtps'];
        if ($NDTPS >= 12)
        {
            return 4;
        } else if ($NDTPS >= 3 && $NDTPS < 12)
        {
            return ((2 * $NDTPS) + 12) / 9;
        } else {
            return 0;
        }
    }
// End NDTPS

// PDS3
    private function PDS3()
    {
        $dosen = (new SdmDosenController)->index();
        $NDS3 = $dosen['nds3'];
        $NDTPS = $dosen['ndtps'];
        $PDS3 = ($NDS3 / $NDTPS);

        if ($PDS3 >= 0.5) 
        {
            return 4;
        } else
        {
            return 2 + (4 * $PDS3);
        }
    }
// End PDSS3

// RMD
    private function RMD()
    {
        $dosen = (new SdmDosenController)->index();
        $NDTPS = $dosen['ndtps'];
        $mahasiswa = (new MahasiswaController)->index();
        $NM = $mahasiswa['total'];
        $RMD = $NM / $NDTPS;

        if($RMD >= 15 && $RMD <= 25)
        {
            return 4;
        } else if ($RMD < 15) {
            return (4 * $RMD) / 15;
        } else if ($RMD > 25 && $RMD <= 35) {
            return (70 - (2 * $RMD)) / 5; 
        } else {
            return 0;
        }
    }
// End RMD

// RDPU
    private function RDPU()
    {
        $dosenta = (new SdmDosenPembimbingTaController)->index();
        $RDPU = $dosenta['average'];
        if($RDPU <= 6)
        {
            return 4;
        } else if ($RDPU > 6 && $RDPU <= 10) {
            return 7 - ($RDPU / 2);
        } else {
            return 0;
        }
    }
// End RDPU

// EWMP
    private function EWMP()
    {
        $dosenewmp = (new SdmEkuivalenWaktuMengajarPenuhDosenTetapController)->index();
        $EWMP = $dosenewmp['average_dtps_average'];
    }
// End EWMP

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SimulasiPenilaian  $simulasiPenilaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        $data = SimulasiPenilaian::find($id);

    // Hitung 1
        $data->point_1 = $request->input('point_1');
        $data->point_1_akhir = $this->hitung1($request->point_1);
        $data->point_2 = $request->input('point_2');
        $data->point_2_akhir = $this->hitung1($request->point_2);

    // Hitung 2
        $data->point_3 = $request->input('point_3');
        $data->point_3_akhir = $this->hitung2($request->point_3);
        $data->point_4 = $request->input('point_4');
        $data->point_4_akhir = $this->hitung2($request->point_4);
        $data->point_5 = $request->input('point_5');
        $data->point_5_akhir = $this->hitung2($request->point_5);

    // Hitung 3
        $data->point_6a = $request->input('point_6a');
        $data->point_6b = $request->input('point_6b');
        $data->point_6_akhir = $this->hitung3($request->point_6a, $request->point_6b);
        $data->point_7a = $request->input('point_7a');
        $data->point_7b = $request->input('point_7b');
        $data->point_7_akhir = $this->hitung3($request->point_7a, $request->point_7b);

    // Hitung 4
        $data->point_8 = $request->input('point_8');
        $data->point_8_akhir = $this->hitung4($request->point_8);
        $data->point_10 = $request->input('point_10');
        $data->point_10_akhir = $this->hitung4($request->point_10);
        $data->point_11 = $request->input('point_11');
        $data->point_11_akhir = $this->hitung4($request->point_11);
        $data->point_12 = $request->input('point_12');
        $data->point_12_akhir = $this->hitung4($request->point_12);
        $data->point_13 = $request->input('point_13');
        $data->point_13_akhir = $this->hitung4($request->point_13);
    // Hitung 4a
        $data->point_9a = $request->input('point_9a');
        $data->point_9b = $request->input('point_9b');
        $data->point_9_akhir = $this->hitung4a($data->point_9a, $data->point_9b);

    // Hitung 5 
        $data->point_14a = $request->input('point_14');
        $data->point_14_akhir = $this->hitung5a($data->point_14a);
        $data->point_15a = $request->input('point_15a');
        $data->point_15b = $this->PMA();
        $data->point_15_akhir = $this->hitung5($data->point_15a, $data->point_15b);
        $data->point_16a = $request->input('point_16a');
        $data->point_16b = $request->input('point_16b');
        $data->point_16_akhir = $this->hitung5($data->point_16a, $data->point_16b);

    // Hitung 6 (17 - 31)
        $data->point_17 = $request->input('point_17');
        $data->point_17_akhir = $this->hitung6($data->point_17);
        $data->point_18 = $request->input('point_18');
        $data->point_18_akhir = $this->hitung6($data->point_18);
        $data->point_19 = $request->input('point_19');
        $data->point_19_akhir = $this->hitung6($data->point_19);
        $data->point_20 = $request->input('point_20');
        $data->point_20_akhir = $this->hitung6($data->point_20);

        $data->point_21 = $request->input('point_21');
        $data->point_21_akhir = $this->hitung6($data->point_21);
        $data->point_22 = $request->input('point_22');
        $data->point_22_akhir = $this->hitung6($data->point_22);
        $data->point_23 = $request->input('point_23');
        $data->point_23_akhir = $this->hitung6($data->point_23);
        $data->point_24 = $request->input('point_24');
        $data->point_24_akhir = $this->hitung6($data->point_24);
        $data->point_25 = $request->input('point_25');
        $data->point_25_akhir = $this->hitung6($data->point_25);
        $data->point_26 = $request->input('point_26');
        $data->point_26_akhir = $this->hitung6($data->point_26);
        $data->point_27 = $request->input('point_27');
        $data->point_27_akhir = $this->hitung6($data->point_27);
        $data->point_28 = $request->input('point_28');
        $data->point_28_akhir = $this->hitung6($data->point_28);
        $data->point_29 = $request->input('point_29');
        $data->point_29_akhir = $this->hitung6($data->point_29);
        $data->point_30 = $request->input('point_30');
        $data->point_30_akhir = $this->hitung6($data->point_30);
    // Hitung 6a
        $data->point_31a = $request->input('point_31a');
        $data->point_31b = $request->input('point_31b');
        $data->point_31_akhir = $this->hitung6a($data->point_31a, $data->point_31b);

    // Hitung 7 (32 - 37)
        $data->point_32 = $request->input('point_32');
        $data->point_32_akhir = $this->hitung7($data->point_32);
        $data->point_33 = $request->input('point_33');
        $data->point_33_akhir = $this->hitung7($data->point_33);
        $data->point_34 = $request->input('point_34');
        $data->point_34_akhir = $this->hitung7($data->point_34);
        $data->point_35 = $request->input('point_35');
        $data->point_35_akhir = $this->hitung7($data->point_35);
        $data->point_36 = $request->input('point_36');
        $data->point_36_akhir = $this->hitung7($data->point_36);
        $data->point_37 = $request->input('point_37');
        $data->point_37_akhir = $this->hitung7($data->point_37);

    // Hitung 8 (38 - 47)
        $data->point_38a = $request->input('point_38a');
        $data->point_38b = $request->input('point_38b');
        $data->point_38c = $request->input('point_38c');
        $data->point_38_akhir = $this->hitung8($data->point_38a, $data->point_38b, $data->point_38c);
        $data->point_44a = $request->input('point_44a');
        $data->point_44b = $request->input('point_44b');
        $data->point_44c = $request->input('point_44c');
        $data->point_44_akhir = $this->hitung8($data->point_44a, $data->point_44b, $data->point_44c);

    // Hitung 8a
        $data->point_39 = $request->input('point_39');
        $data->point_39_akhir = $this->hitung8a($data->point_39);
        $data->point_42 = $request->input('point_42');
        $data->point_42_akhir = $this->hitung8a($data->point_42);
        $data->point_43 = $request->input('point_43');
        $data->point_43_akhir = $this->hitung8a($data->point_43);
        $data->point_45 = $request->input('point_45');
        $data->point_45_akhir = $this->hitung8a($data->point_45);
        $data->point_46 = $request->input('point_46');
        $data->point_46_akhir = $this->hitung8a($data->point_46);

    // Hitung 8b
        $data->point_40a = $request->input('point_40a');
        $data->point_40b = $request->input('point_40b');
        $data->point_40_akhir = $this->hitung8b($data->point_40a, $data->point_40b);
        $data->point_47a = $request->input('point_47a');
        $data->point_47b = $request->input('point_47b');
        $data->point_47_akhir = $this->hitung8b($data->point_47a, $data->point_47b);

    // Hitung 8c
        $data->point_41a = $request->input('point_41a');
        $data->point_41b = $request->input('point_41b');
        $data->point_41c = $request->input('point_41c');
        $data->point_41d = $request->input('point_41d');
        $data->point_41e = $request->input('point_41e');
        $data->point_41_akhir = $this->hitung8c($data->point_41a, $data->point_41b, $data->point_41c, $data->point_41d, $data->point_41e);

    // Hitung 9 (48 - 49)
        $data->point_48 = $request->input('point_48');
        $data->point_48_akhir = $this->hitung9($data->point_48);
        $data->point_49 = $request->input('point_49');
        $data->point_49_akhir = $this->hitung9($data->point_49);

    // Hitung 10 (50 - 51)
        $data->point_50 = $request->input('point_50');
        $data->point_50_akhir = $this->hitung10($data->point_50);
        $data->point_51 = $request->input('point_51');
        $data->point_51_akhir = $this->hitung10($data->point_51);

    // Hitung 11 (52 - 65)
        $data->point_52 = $request->input('point_52');
        $data->point_52_akhir = $this->hitung11($data->point_52);
        $data->point_53 = $request->input('point_53');
        $data->point_53_akhir = $this->hitung11($data->point_53);
        $data->point_54 = $request->input('point_54');
        $data->point_54_akhir = $this->hitung11($data->point_54);
        $data->point_55 = $request->input('point_55');
        $data->point_55_akhir = $this->hitung11($data->point_55);
        $data->point_56 = $request->input('point_56');
        $data->point_56_akhir = $this->hitung11($data->point_56);
        $data->point_57 = $request->input('point_57');
        $data->point_57_akhir = $this->hitung11($data->point_57);
        $data->point_58 = $request->input('point_58');
        $data->point_58_akhir = $this->hitung11($data->point_58);
        $data->point_59 = $request->input('point_59');
        $data->point_59_akhir = $this->hitung11($data->point_59);
        $data->point_60 = $request->input('point_60');
        $data->point_60_akhir = $this->hitung11($data->point_60);

        $data->point_61 = $request->input('point_61');
        $data->point_61_akhir = $this->hitung11($data->point_61);
        $data->point_62 = $request->input('point_62');
        $data->point_62_akhir = $this->hitung11($data->point_62);
        $data->point_63 = $request->input('point_63');
        $data->point_63_akhir = $this->hitung11($data->point_63);
        $data->point_64 = $request->input('point_64');
        $data->point_64_akhir = $this->hitung11($data->point_64);
        $data->point_65 = $request->input('point_65');
        $data->point_65_akhir = $this->hitung11($data->point_65);

    // Hitung 12
        $data->point_66 = $request->input('point_66');
        $data->point_66_akhir = $this->hitung12($data->point_66);
        $data->point_68 = $request->input('point_68');
        $data->point_68_akhir = $this->hitung12($data->point_68);
    // End Hitung

        $data->point_67 = $request->input('point_67');
        $data->point_67_akhir = $data->point_67*2;  
        $data->point_69 = $request->input('point_69'); 
        $data->point_69_akhir = $data->point_69;  
   

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
