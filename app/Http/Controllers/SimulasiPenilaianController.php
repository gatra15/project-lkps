<?php

namespace App\Http\Controllers;

use App\Exports\SimulasiExport;
use Carbon\Carbon;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\SimulasiPenilaian;
use Illuminate\Support\Collection;
use App\Models\CapaianPembelajaran;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\IndikatorTataKerjasama;
use App\Http\Controllers\MahasiswaController;
use App\Models\SdmKinerjaDosenPenelitianDtps;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\SdmKinerjaDosenPenelitianDtpsController;

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

    // Point 9a
        $RK = $this->RK();   
    // Point 9b
        $NI = $this->NI();
    // Point 14
        $Rasio = $this->Rasio();
    // Point 15
        $PMA = $this->PMA();
        // dd($PMA);
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
    // Point 23
        $PDTT = $this->PDTT();
    // Point 24
        $RRD = $this->RRD();
    // Point 25
        $RI = $this->RI();
    // Point 26
        $RIpkm = $this->RIpkm();
    // Point 27
        $RW = $this->RW();
    // Point 28
        $RS = $this->RS();
    // Point 29
        $RLP = $this->RLP();
    // Point 32
        $DOP = $this->DOP();
    // Point 33
        $DPD = $this->DPD();
    // Point 34
        $DPkmD = $this->DPkmD();
    // Point 42
        $PJP = $this->PJP();
    // Point 45
        $NMKI = $this->NMKI();
    // Point 47
        $TKM = $this->TKM();
    // Point 49
        $PPDM = $this->PPDM();
    // Point 51
        $PPkmDM = $this->PPkmDM();
    // Point 53
        $RIPK = $this->RIPK();
    // Point 54
        $RI54 = $this->RI54();
    // Point 55
        $RI55 = $this->RI55();
    // POint 56
        $MS = $this->MS();
    // Point 57
        $PTW = $this->PTW();
    // Point 58
        $PPS = $this->PPS();
    // Point 60 
        $WT = $this->WT();
    // Point 61
        $PBS = $this->PBS();
    // Point 62
        $RI62 = $this->RI62();
    // Point 63
        $STK = $this->STK();
    // Point 64
        $RI64 = $this->RI64();
    // Point 65
        $NLP = $this->NLP();


        // Hitung
        $collection = new Collection([
            ['na1' => 'point_1_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_1_akhir')],
            ['na2' => 'point_2_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_2_akhir')],
            ['na3' => 'point_3_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_3_akhir')],
            ['na4' => 'point_4_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_4_akhir')],
            ['na5' => 'point_5_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_5_akhir')],
            ['na6' => 'point_6_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_6_akhir')],
            ['na7' => 'point_7_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_7_akhir')],
            ['na8' => 'point_8_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_8_akhir')],
            ['na9' => 'point_9_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_9_akhir')],
            ['na10' => 'point_10_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_10_akhir')],
            ['na11' => 'point_11_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_11_akhir')],
            ['na12' => 'point_12_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_12_akhir')],
            ['na13' => 'point_13_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_13_akhir')],
            ['na14' => 'point_14_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_14_akhir')],
            ['na15' => 'point_15_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_15_akhir')],
            ['na16' => 'point_16_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_16_akhir')],
            ['na17' => 'point_17_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_17_akhir')],
            ['na18' => 'point_18_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_18_akhir')],
            ['na19' => 'point_19_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_19_akhir')],
            ['na20' => 'point_20_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_20_akhir')],
            ['na21' => 'point_21_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_21_akhir')],
            ['na22' => 'point_22_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_22_akhir')],
            ['na23' => 'point_23_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_23_akhir')],
            ['na24' => 'point_24_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_24_akhir')],
            ['na25' => 'point_25_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_25_akhir')],
            ['na26' => 'point_26_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_26_akhir')],
            ['na27' => 'point_27_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_27_akhir')],
            ['na28' => 'point_28_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_28_akhir')],
            ['na29' => 'point_29_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_29_akhir')],
            ['na30' => 'point_30_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_30_akhir')],
            ['na31' => 'point_31_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_31_akhir')],
            ['na32' => 'point_32_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_32_akhir')],
            ['na33' => 'point_33_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_33_akhir')],
            ['na34' => 'point_34_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_34_akhir')],
            ['na35' => 'point_35_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_35_akhir')],
            ['na36' => 'point_36_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_36_akhir')],
            ['na37' => 'point_37_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_37_akhir')],
            ['na38' => 'point_38_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_38_akhir')],
            ['na39' => 'point_39_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_39_akhir')],
            ['na40' => 'point_40_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_40_akhir')],
            ['na41' => 'point_41_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_41_akhir')],
            ['na42' => 'point_42_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_42_akhir')],
            ['na43' => 'point_43_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_43_akhir')],
            ['na44' => 'point_44_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_44_akhir')],
            ['na45' => 'point_45_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_45_akhir')],
            ['na46' => 'point_46_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_46_akhir')],
            ['na47' => 'point_47_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_47_akhir')],
            ['na48' => 'point_48_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_48_akhir')],
            ['na49' => 'point_49_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_49_akhir')],
            ['na50' => 'point_50_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_50_akhir')],
            ['na51' => 'point_51_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_51_akhir')],
            ['na52' => 'point_52_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_52_akhir')],
            ['na53' => 'point_53_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_53_akhir')],
            ['na54' => 'point_54_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_54_akhir')],
            ['na55' => 'point_55_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_55_akhir')],
            ['na56' => 'point_56_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_56_akhir')],
            ['na57' => 'point_57_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_57_akhir')],
            ['na58' => 'point_58_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_58_akhir')],
            ['na59' => 'point_59_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_59_akhir')],
            ['na60' => 'point_60_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_60_akhir')],
            ['na61' => 'point_61_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_61_akhir')],
            ['na62' => 'point_62_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_62_akhir')],
            ['na63' => 'point_63_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_63_akhir')],
            ['na64' => 'point_64_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_64_akhir')],
            ['na65' => 'point_65_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_65_akhir')],
            ['na66' => 'point_66_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_66_akhir')],
            ['na67' => 'point_67_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_67_akhir')],
            ['na68' => 'point_68_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_68_akhir')],
            ['na69' => 'point_69_akhir', 'na' => SimulasiPenilaian::where('tahun_laporan', $tahun)->where('prodi', $prodi)->sum('point_69_akhir')],
            
        ]);
        $sum_nilai_akhir = $collection->sum('na');


        $simulasi = SimulasiPenilaian::where($where)->get();
        $approved = SimulasiPenilaian::where($where)->where('is_approved', true)->get();
        return view('tab.simulasi', [
            'simulasi' => $simulasi,
            'mahasiswa' => $pendaftar,
            'title' => 'Simulasi',
            'RK' => $RK,
            'PMA' => $PMA,
            'Rasio' => $Rasio,
            'NDTPS' => $NDTPS,
            'PDS3' => $PDS3,
            'RMD' => $RMD,
            'RDPU' => $RDPU,
            'EWMP' => $EWMP,
            'NI' => $NI,
            'PDTT' => $PDTT,
            'RRD' => $RRD,
            'RI' => $RI,
            'RIpkm' => $RIpkm,
            'RW' => $RW,
            'RS' => $RS,
            'RLP' => $RLP,
            'DOP' => $DOP,
            'DPD' => $DPD,
            'DPkmD' => $DPkmD,
            'PJP' => $PJP,
            'NMKI' => $NMKI,
            'TKM' => $TKM,
            'PPDM' => $PPDM,
            'PPkmDM' => $PPkmDM,
            'RIPK' => $RIPK,
            'RI54' => $RI54,
            'RI55' => $RI55,
            'MS' => $MS,
            'PPS' => $PPS,
            'WT' => $WT,
            'PBS' => $PBS,
            'RI62' => $RI62,
            'PTW' => $PTW,
            'STK' => $STK,
            'RI64' => $RI64,
            'NLP' => $NLP,
            'sum_nilai_akhir' => $sum_nilai_akhir,
            'approved' => $approved,
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
        // 
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
    
    private function hitung4a($input1, $input2)
    {
        $data = ((2 * $input1) + $input2) / 3;
        $data = $data * 0.7625;
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

// NI
    private function NI()
    {
        $tatapamong = (new TataPamongController)->index();
        $a = 2; $b= 6; $c=9;
        $NI = $tatapamong['internasional'];
        $NN = $tatapamong['nasional'];
        $NL = $tatapamong['lokal'];

        if ($NI >= $a)
        {
            return 4;
        } else if ($NI < $a && $NN >= $b)
        {
            return 3 + ($NI / $a);
        } else if ($NI > 0 && $NI < $a && $NN > 0 && $NN < $b)
        {
            return  2 + (2 * ($NI/$a)) + ($NN/$b) - (($NI * $NN)/($a * $b));
        } else if ($NI == 0 && $NN == 0 && $NL >= $c)
        {
            return 2;
        } else 
        {
            return (2*$NL) / $c;
        } 
    }
// End NI

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
        // $RDPU = $dosenta['average'];
        // if($RDPU <= 6)
        // {
        //     return 4;
        // } else if ($RDPU > 6 && $RDPU <= 10) {
        //     return 7 - ($RDPU / 2);
        // } else {
        //     return 0;
        // }
    }
// End RDPU

// EWMP
    private function EWMP()
    {
        $dosenewmp = (new SdmEkuivalenWaktuMengajarPenuhDosenTetapController)->index();
        $EWMP = $dosenewmp['average_dtps_average'];
        if($EWMP >= 12 && $EWMP <= 16)
        {
            return 4;
        } else if ($EWMP >= 6 && $EWMP < 12 )
        {
            return ((2 * $EWMP) - 12) / 3;
        } else if ($EWMP > 16 && $EWMP <= 18)
        {
            return 36 - (2 * $EWMP);
        } else {
            return 0;
        }
    }
// End EWMP

// PDTT
    private function PDTT()
    {
        $dosen = (new SdmDosenController)->index();
        $dosentidaktetap = (new SdmDosenTidakTetapController)->index();
        $NDT = $dosen['ndt'];
        $NDTT = $dosentidaktetap['ndtt'];
        $PDTT = ($NDTT / ($NDT + $NDTT));

        if($PDTT <= 0.1)
        {
            return 4;
        } else if ($PDTT < 0.1 && $PDTT <= 0.4)
        {
            return (14 - (20 * $PDTT)) / 3;
        } else {
            return 0;
        }
    }
// End PDTT

// RRD
    private function RRD()
    {
        $kinerjaDosen = (new KinerjaDosenController)->index();
        $dosen = (new SdmDosenController)->index();
        $NRD = $kinerjaDosen['nrd'];
        $NDTPS = $dosen['ndtps'];

        $RRD = $NRD/$NDTPS;

        if($RRD >= 0.5 )
        {
            return 4;
        } else
        {
            return 2 + (4 * $RRD);
        }

    }
// End RRD

// RI
    private function RI()
    {
        $dosen = (new SdmDosenController)->index();
        $penelitian = (new SdmKinerjaDosenPenelitianDtpsController)->index();
        $NDTPS = $dosen['ndtps'];
        $NI = $penelitian['NI'];
        $NN = $penelitian['NN'];
        $NL = $penelitian['NL'];
        $RI =  $NI / 3 / $NDTPS;
        $RN = $NN / 3 / $NDTPS;
        $RL = $NL / 3 / $NDTPS;
        $a = 0.05; $b = 0.3; $c = 1;

        if ($RI >= $a)
        {
            return 4;
        } else if ( $RI < $a && $RN >= $b)
        {
            return 3 + ($RI / $a);
        } else if ($RI > 0 && $RI < $a && $RN > 0 && $RN < $b)
        {
            return 2 + (2 * ($RI/$a)) + ($RN/$b) - (($RI * $RN)/($a * $b));
        } else if ($RI == 0 && $RN == 0 && $RL >= $c)
        {
            return 2;
        } else {
            return (2 * $RL) / $c;
        }
    }
// End RI

// RIpkm
    private function RIpkm()
    {
        $dosen = (new SdmDosenController)->index();
        $penelitian = (new SdmKinerjaDosenPkmDtpsController)->index();
        $NDTPS = $dosen['ndtps'];
        $NI = $penelitian['NI'];
        $NN = $penelitian['NN'];
        $NL = $penelitian['NL'];
        $RI =  $NI / 3 / $NDTPS;
        $RN = $NN / 3 / $NDTPS;
        $RL = $NL / 3 / $NDTPS;
        $a = 0.05; $b = 0.3; $c = 1;

        if ($RI >= $a)
        {
            return 4;
        } else if ( $RI < $a && $RN >= $b)
        {
            return 3 + ($RI / $a);
        } else if ($RI > 0 && $RI < $a && $RN > 0 && $RN < $b)
        {
            return 2 + (2 * ($RI/$a)) + ($RN/$b) - (($RI * $RN)/($a * $b));
        } else if ($RI == 0 && $RN == 0 && $RL >= $c)
        {
            return 2;
        } else {
            return (2 * $RL) / $c;
        }
    }
// End RI

// RW
    private function RW()
    {
        $publikasi = (new SdmKinerjaDosenPublikasiIlmiahDtpsController)->index();
        $NA1 = $publikasi['na1']; $NB1 = $publikasi['nb1']; $NC1 = $publikasi['nc1'];
        $NA2 = $publikasi['na2']; $NB2 = $publikasi['nb2']; $NC2 = $publikasi['nc2'];
        $NA3 = $publikasi['na3']; $NB3 = $publikasi['nb3']; $NC3 = $publikasi['nc3'];
        $NA4 = $publikasi['na4'];
        $dosen = (new SdmDosenController)->index();
        $NDTPS = $dosen['ndtps'];

        $RW = ($NA1 + $NB1 + $NC1) / $NDTPS; 
        $RN = ($NA2 + $NA3 + $NB2 + $NC2) / $NDTPS; 
        $RI = ($NA4 + $NB3 + $NC3) / $NDTPS;
        $a = 0.1; $b = 1; $c = 2;

        if($RI >= $a)
        {
            return 4;
        } else if ($RI < $a && $RN >= $b)
        {
            return 3 + ($RI/$a);
        } else if ($RI > 0 && $RI < $a && $RN > 0 && $RN < $b)
        {
            return 2 + (2 * ($RI/$a)) + ($RN/$b) - (($RI * $RN)/($a * $b));
        } else if ($RI == 0 && $RN == 0 && $RW >= $c)
        {
            return 2;
        } else {
            return (2 * $RW) / $c;
        }
    }
// End RW

// RS
    private function RS()
    {
        $karyailmiah = (new SdmKinerjaDosenKaryaIlmiahDtpsController)->index();
        $NAS = $karyailmiah['count'];
        $dosen = (new SdmDosenController)->index();
        $NDTPS = $dosen['ndtps'];

        $RS = $NAS / $NDTPS;

        if($RS >= 0.5)
        {
            return 4;
        } else
        {
            return 2 + (4 * $RS);
        }
    }
// End RS

// RLP
    private function RLP()
    {
        $luaran = (new SdmKinerjaDosenLuaranPkmDtpsController)->index();
        $NA = $luaran['na']; $NB = $luaran['nb']; $NC = $luaran['nc']; $ND = $luaran['nd'];
        $dosen = (new SdmDosenController)->index();
        $NDTPS = $dosen['ndtps'];
        $RLP =  (2 * ($NA + $NB + $NC) + $ND) / $NDTPS;

        if($RLP >= 1)
        {
            return 4;
        } else {
            return 2 + (2 * $RLP);
        }

    }
// End RLP

// DOP
    private function DOP()
    {
        $keuangan = (new KeuanganSaranaPrasaranaController)->index();
        $DOP = $keuangan['dop'];
        if ($DOP >= 20)
        {
            return 4;
        } else {
            return $DOP / 5;
        }
    }
// End DOP

// DPD
    private function DPD()
    {
        $keuangan = (new KeuanganSaranaPrasaranaController)->index();
        $DPD = $keuangan['dpd'];
        if($DPD >= 10)
        {
            return 4;
        } else {
            return (2 * $DPD) / 5;
        }
    }
// End DPD

// DPkmD
    private function DpkmD()
    {
        $keuangan = (new KeuanganSaranaPrasaranaController)->index();
        $DPkmD = $keuangan['dpkmd'];
        if ($DPkmD >= 5)
        {
            return 4;
        } else {
            return (4 * $DPkmD) / 5;
        }
    }
// End DPkmD

// PJP
    private function PJP()
    {
        $kurikulum = (new PendidikanKurikulumController)->index();
        $JP = $kurikulum['bobot_praktikum'] * 50/60;
        $JB = $kurikulum['konversi_kredit_jam'];
        $PJP = $JP/$JB;

        if($PJP >= 0.2)
        {
            return 4;
        } else 
        {
            return 20 * $PJP;
        }
    }
// End PJP

// NMKI
    private function NMKI()
    {
        $integrasi = (new PendidikanIntegrasiKegiatanPenelitianController)->index();
        $NMKI = $integrasi['nmki'];
        // dd($NMKI);

        if($NMKI > 3)
        {
            return 4;
        } else if ($NMKI <= 3 && $NMKI >=2 )
        {
            return 3;
        } else {
            return 2;
        }
    }
// End NMKI

// TKM
    private function TKM()
    {
        $KM = (new PendidikanKepuasanMahasiswaController)->index();
        $TKM1 = (4 * $KM['tkm1']['a1']) + (3 * $KM['tkm1']['b1']) + (2 * $KM['tkm1']['c1']) + $KM['tkm1']['d1'];
        $TKM2 = (4 * $KM['tkm2']['a2']) + (3 * $KM['tkm2']['b2']) + (2 * $KM['tkm2']['c2']) + $KM['tkm2']['d2'];
        $TKM3 = (4 * $KM['tkm3']['a3']) + (3 * $KM['tkm3']['b3']) + (2 * $KM['tkm3']['c3']) + $KM['tkm3']['d3'];
        $TKM4 = (4 * $KM['tkm4']['a4']) + (3 * $KM['tkm4']['b4']) + (2 * $KM['tkm4']['c4']) + $KM['tkm4']['d4'];
        $TKM5 = (4 * $KM['tkm5']['a5']) + (3 * $KM['tkm5']['b5']) + (2 * $KM['tkm5']['c5']) + $KM['tkm5']['d5'];
        $TKM = ($TKM1 + $TKM2 + $TKM3 + $TKM4 + $TKM5) / 5;

        if ($TKM >= 0.75)
        {
            return 4;
        } else if ($TKM < 0.75 && $TKM >= 0.25)
        {
            return (8 * $TKM) - 2;
        } else {
            return 0;
        }
    }
// End TKM

// PPDM
    private function PPDM()
    {
        $PD = (new SdmKinerjaDosenPenelitianDtpsController)->index();
        $NPD = $PD['jumlah'];
        $PDM = (new PenelitianController)->index();
        $NPM = $PDM['npm'];
        $PPDM = ($NPM / $NPD);

        if($PPDM >= 0.25)
        {
            return 4;
        } else {
            return 2 + (8 * $PPDM);
        }

    }
// End PPDM

// PPkmDM
    private function PPkmDM()
    {
        $PkmD = (new SdmKinerjaDosenPkmDtpsController)->index();
        $NPkmD = $PkmD['jumlah'];
        $PkmDM = (new PengabdianController)->index();
        $NPkmM = $PkmDM['npkm'];
        $PPkmDM = ($NPkmM / $NPkmD);

        if($PPkmDM >= 0.25)
        {
            return 4;
        } else {
            return 2 + (8 * $PPkmDM);
        }

    }
// End PPkmDM

// RIPK
    private function RIPK()
    {
        $capaian = (new CapaianPembelajaranController)->index();
        $RIPK = $capaian['ripk'];

        if($RIPK >= 3.25)
        {
            return 4;
        } else {
            return ((8 * $RIPK) - 6) / 5;
        }
    }
// End RIPK

// RI54
    private function RI54()
    {
        $prestasi = (new PrestasiMahasiswaController)->index();
        $NI = $prestasi['internasional'];
        $NN = $prestasi['nasional'];
        $NW = $prestasi['wilayah'];
        $mahasiswa = (new MahasiswaController)->index();
        $NM = $mahasiswa['total'];

        $RI = $NI / $NM; $RN = $NN / $NM; $RW = $NW / $NM;

        $a = 0.1; $b = 1; $c = 2;

        if ($RI >= $a)
        {
            return 4;
        } else if ($RI < $a && $RN > $b)
        {
            return 3 + ($RI / $a);
        } else if ($RI > 0 && $RI < $a && $RN > 0 && $RN < $b )
        {
            return 2 + (2 * ($RI/$a)) + ($RN/$b) - (($RI * $RN)/($a * $b));
        } else if ($RI == 0 && $RN == 0 && $RW >= $c) 
        {
            return 2;
        } else {
            return (2 * $RW) / $c;
        }
    }
// End Ri54

// RI55
    private function RI55()
    {
        $prestasi = (new PrestasiMahasiswaController)->index();
        $NI = $prestasi["nonakademik"]['internasional'];
        $NN = $prestasi["nonakademik"]['nasional'];
        $NW = $prestasi["nonakademik"]['wilayah'];
        $mahasiswa = (new MahasiswaController)->index();
        $NM = $mahasiswa['total'];
        $RI = $NI / $NM; $RN = $NN / $NM; $RW = $NW / $NM; $a = 0.2; $b = 2; $c = 4;

        if ($RI >= $a)
        {
            return 4;
        } else if ($RI < $a && $RN > $b)
        {
            return 3 + ($RI / $a);
        } else if ($RI > 0 && $RI < $a && $RN > 0 && $RN < $b )
        {
            return 2 + (2 * ($RI/$a)) + ($RN/$b) - (($RI * $RN)/($a * $b));
        } else if ($RI == 0 && $RN == 0 && $RW >= $c) 
        {
            return 2;
        } else {
            return (2 * $RW) / $c;
        }
    }
// End RI55

// MS
    private function MS()
    {
        $efektifitas = (new EfektifitasProduktifitasPendidikanController)->index();
        $jumlah = $efektifitas['jumlah'];
        $MS6 = $efektifitas['jumlah6'] * $efektifitas['jumlah6'];
        $MS5 = $efektifitas['jumlah5'] * $efektifitas['jumlah5'];
        $MS4 = $efektifitas['jumlah4'] * $efektifitas['jumlah4'];
        $MS3 = $efektifitas['jumlah3'] * $efektifitas['jumlah3'];
        $MS = ($MS6 + $MS5 + $MS4 + $MS3) / $jumlah;

        if($MS > 3.5 && $MS <= 4.5)
        {
            return 4;
        } else if ($MS > 3 && $MS <= 3.5)
        {
            return (8 * $MS) - 24;
        } else if ($MS > 4.5 && $MS <= 7)
        {
            return (56 - (8 * $MS)) / 5;
        } else {
            return 0;
        }
    }
// End MS

// PTW
    private function PTW()
    {
        $efektifitas = (new EfektifitasProduktifitasPendidikanController)->index();
        $PTW = $efektifitas['totalts'] / $efektifitas['jumlah_mahasiswa'];
        if ($PTW >= 0.5)
        {
            return 4;
        } else {
            return 1 + (6 * $PTW);
        }
    }
// End PTW
    
// PPS
    private function PPS()
    {
        $efektifitas = (new EfektifitasProduktifitasPendidikanController)->index();
        $PPS = $efektifitas['totalts'] / $efektifitas['jumlah_mahasiswa'];
        if ($PPS >= 0.85)
        {
            return 4;
        } else if ($PPS >= 30 && $PPS < 85) 
        {
            return ((80 * $PPS) - 24) / 11;
        }else {
            return 0;
        }
    }
// End PPS

// WT
    private function WT()
    {
        $dayasaing = (new WaktuTungguLulusanController)->index();
        $NL = $dayasaing['nl'];
        $NJ = $dayasaing['nj'];
        $kategori = $NL >= 300 ? 1 : 2;
        $PJ = ($NJ/$NL);        

        $Prmin = $kategori == 1 ? 0.3 : 0.5 - (($NL / 300)*0.2);
        $a = 3; $b = 12; $c = 21;
        $JL = $dayasaing['jl'];
        $JL2 = $dayasaing['jl2'];
        $JL3 = $dayasaing['jl3'];
        $JL4 = $dayasaing['jl4'];

        $WT = (($JL4 * $a) + ($JL3 *$b) + ($JL2 * $c)) / $JL;

        if($PJ < $Prmin) {
            return ($PJ/$Prmin) * $this->ifWT($WT);
        } else {
            return $this->ifWT($WT);
        }
    }

    private function ifWT($WT){
        if($WT < 6)
        {
            return 4;
        } else if($WT >= 6 && $WT <= 18)
        {
            return (18 - $WT) /3; 
        } else {
            return 0;
        }
    }
// End WT

// PBS
    private function PBS()
    {
        $kesesuaian = (new KesesuaianBidangKerjaController)->index();

        $rendah = $kesesuaian['rendah'];
        $sedang = $kesesuaian['sedang'];
        $tinggi = $kesesuaian['tinggi'];
        $jumlah = $kesesuaian['jumlah'];

        $NL = $kesesuaian['nl'];
        $NJ = $kesesuaian['nj'];
        $kategori = $NL >= 300 ? 1 : 2;
        $PJ = ($NJ/$NL);        
        $Prmin = $kategori == 1 ? 0.3 : 0.5 - (($NL / 300)*0.2);
        $a = 0.3; $b = 0.75; $c = 1;
        $PBS = (($rendah * $a) + ($sedang * $b) + ($tinggi * $c)) / $jumlah;

        if($PJ < $Prmin) {
            return ($PJ/$Prmin) * $this->ifPBS($PBS);
        } else {
            return $this->ifPBS($PBS);
        }

    }
    
    private function ifPBS($PBS)
    {
        if($PBS >= 0.6)
        {
            return 4;
        } else {
            return (20 * $PBS) / 3;
        }
    }
// End PBS

// RI62
    private function RI62()
    {
        $kinerja = (new KinerjaLulusanController)->index();
        $NI = $kinerja['internasional'];
        $NN = $kinerja['nasional'];
        $NW = $kinerja['wilayah'];
        $NL = $kinerja['nl'];
        $NJ = $kinerja['nj'];
        $kategori = $NL >= 300 ? 1 : 2;
        $PJ = ($NJ/$NL);        
        $Prmin = $kategori == 1 ? 0.3 : 0.5 - (($NL / 300)*0.2);
        $RI = ($NI / $NL); $RN = ($NN / $NL); $RW = ($NW / $NL); 

        if($PJ < $Prmin) {
            return ($PJ/$Prmin) * $this->ifRI62($RI, $RN, $RW);
        } else {
            return $this->ifRI62($RI, $RN, $RW);
        }
        
    }

    private function ifRI62($RI, $RN, $RW)
    {
        $a = 0.05; $b = 0.2; $c = 0.9;
        if ($RI >= $a)
        {
            return 4;
        } else if ($RI < $a && $RN > $b)
        {
            return 3 + ($RI / $a);
        } else if ($RI > 0 && $RI < $a && $RN > 0 && $RN < $b )
        {
            return 2 + (2 * ($RI/$a)) + ($RN/ $b) - (($RI * $RN)/($a * $b));
        } else if ($RI == 0 && $RN == 0 && $RW >= $c) 
        {
            return 2;
        } else {
            return (2 * $RW) / $c;
        }
    }
// End RI62

// STK
    private function STK()
    {
        $KP = (new KepuasanPenggunaController)->index();
        $kinerja = (new KinerjaLulusanController)->index();
        $NL = $kinerja['nl'];
        $NJ = $kinerja['nj'];
        $kategori = $NL >= 300 ? 1 : 2;
        $PJ = ($NJ/$NL);        
        $Prmin = $kategori == 1 ? 0.3 : 0.5 - (($NL / 300)*0.2);

        $TKI1 = (4 * $KP['tkp1']['a1']) + (3 * $KP['tkp1']['b1']) + (2 * $KP['tkp1']['c1']) + $KP['tkp1']['d1'];
        $TKI2 = (4 * $KP['tkp2']['a2']) + (3 * $KP['tkp2']['b2']) + (2 * $KP['tkp2']['c2']) + $KP['tkp2']['d2'];
        $TKI3 = (4 * $KP['tkp3']['a3']) + (3 * $KP['tkp3']['b3']) + (2 * $KP['tkp3']['c3']) + $KP['tkp3']['d3'];
        $TKI4 = (4 * $KP['tkp4']['a4']) + (3 * $KP['tkp4']['b4']) + (2 * $KP['tkp4']['c4']) + $KP['tkp4']['d4'];
        $TKI5 = (4 * $KP['tkp5']['a5']) + (3 * $KP['tkp5']['b5']) + (2 * $KP['tkp5']['c5']) + $KP['tkp5']['d5'];
        $TKI6 = (4 * $KP['tkp6']['a6']) + (3 * $KP['tkp6']['b6']) + (2 * $KP['tkp6']['c6']) + $KP['tkp6']['d6'];
        $TKI7 = (4 * $KP['tkp7']['a7']) + (3 * $KP['tkp7']['b7']) + (2 * $KP['tkp7']['c7']) + $KP['tkp7']['d7'];
        $STK = (($TKI1 + $TKI2 + $TKI3 + $TKI4 + $TKI5 + $TKI6 + $TKI7) / 7) / 100; 
        if($PJ < $Prmin) {
            return ($PJ/$Prmin) * $STK;
        } else {
            return $STK;
        }
    }
// End STK

// RI64
    private function RI64()
    {
        $PIM = (new PublikasiIlmiahMahasiswaController)->index();
        $NA1 = $PIM['na1']; $NA2 = $PIM['na2']; $NA3 = $PIM['na3']; $NA4 = $PIM['na4']; $NB1 = $PIM['nb1'];
        $NB2 = $PIM['nb2']; $NB3 = $PIM['nb3']; $NC1 = $PIM['nc1']; $NC2 = $PIM['nc2']; $NC3 = $PIM['nc3'];
        $mahasiswa = (new MahasiswaController)->index();
        $NM = $mahasiswa['total'];
        $RL = (($NA1 + $NB1 + $NC1) / $NM); $RN = (($NA2 + $NA3 + $NB2 + $NC2) / $NM); $RI = (($NA4 + $NB3 + $NC3) / $NM);
        $a = 0.01; $b = 0.1; $c = 0.5;


        if ($RI >= $a)
        {
            return 4;
        } else if ($RI < $a && $RN > $b)
        {
            return 3 + ($RI / $a);
        } else if ($RI > 0 && $RI < $a && $RN > 0 && $RN < $b )
        {
            return 2 + (2 * ($RI/$a)) + ($RN/$b) - (($RI * $RN)/($a * $b));
        } else if ($RI == 0 && $RN == 0 && $RL >= $c) 
        {
            return 2;
        } else {
            return (2 * $RL) / $c;
        }

    }
// End RI64

// NLP
    private function NLP()
    {
        $luaran = (new LuaranPkmMahasiswaController)->index();
        $NA = $luaran['na']; $NB = $luaran['nb']; $NC = $luaran['nc']; $ND = $luaran['nd'];
        $NLP =  (2 * ($NA + $NB + $NC) + $ND);

        if($NLP >= 1)
        {
            return 4;
        } else {
            return 2 + (2 * $NLP);
        }
    }
// End NLP

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

    public function exportToExcel()
    {
        return Excel::download(new SimulasiExport, 'simulasi-penilaian.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new SimulasiExport, 'simulasi-penilaian.csv');
    }
    
    public function approve($id)
    {
        $data = SimulasiPenilaian::find($id);
        $data->is_approved = true;
        $data->comment = 'Penilaian telah disetujui.';
        $data->alert = 'success';
        $data->update();

        return back()->with('success', 'Data Telah di Approve.');
    }
    
    public function tolak(Request $request, $id)
    {
        $data = SimulasiPenilaian::find($id);
        $data->is_approved = false;
        $data->comment = $request->input('alasan');
        $data->alert = 'warning';
        $data->update();

        return back()->with('success', 'Data Perlu diperbaiki.');
    }
}
