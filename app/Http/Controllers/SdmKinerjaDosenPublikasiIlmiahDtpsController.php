<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KinerjaDosenPublikasiExport;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Models\SdmKinerjaDosenPublikasiIlmiahDtps;

class SdmKinerjaDosenPublikasiIlmiahDtpsController extends Controller
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
        $cek = SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();
        $cek1 = SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $tahun - 1)->where('prodi', $prodi)->exists();
        $cek2 = SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $tahun - 2)->where('prodi', $prodi)->exists();

        // cek media
        $media = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 1)->exists();
        $media2 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 2)->exists();
        $media3 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 3)->exists();
        $media4 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 4)->exists();
        $media5 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 5)->exists();
        $media6 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 6)->exists();
        $media7 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 7)->exists();
        $media8 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 8)->exists();
        $media9 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 9)->exists();
        $media10 = SdmKinerjaDosenPublikasiIlmiahDtps::where('media_id', 10)->exists();
        
        // dd($media2);
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun - 1, 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun - 2, 'prodi' => $prodi];
    
    // Cek 1
        if(!($cek2 && $media)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 1,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 1,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 1,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 2
        if(!($cek2 && $media2)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 2,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media2)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 2,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media2)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 2,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 3
        if(!($cek2 && $media3)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 3,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media3)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 3,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media3)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 3,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 4
        if(!($cek2 && $media4)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 4,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media4)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 4,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media4)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 4,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 5
        if(!($cek2 && $media5)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 5,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media5)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 5,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media5)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 5,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 6
        if(!($cek2 && $media6)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 6,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media6)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 6,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media6)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 6,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 7
        if(!($cek2 && $media7)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 7,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media7)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 7,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media7)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 7,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 8
        if(!($cek2 && $media8)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 8,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media8)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 8,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media8)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 8,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 9
        if(!($cek2 && $media9)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 9,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media9)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 9,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media9)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 9,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 10
        if(!($cek2 && $media10)){
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 10,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media10)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 10,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media10)) {
            SdmKinerjaDosenPublikasiIlmiahDtps::create([
                'media_id' => 10,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }
    // End Cek

    // media 1
        $ts_all = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->get();
        $ts_all_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('is_approved',1)->get();
        $ts = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 1)->get();
        $ts_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 1)->where('is_approved',1)->get();
        $ts1 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 1)->get();
        $ts1_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 1)->where('is_approved',1)->get();
        $ts2 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 1)->get();
        $ts2_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 1)->where('is_approved',1)->get();
        
    // media 2
        $ts_media2 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 2)->get();
        $ts_media2_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 2)->where('is_approved', 1)->get();
        $ts1_media2 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 2)->get();
        $ts1_media2_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 2)->where('is_approved', 1)->get();
        $ts2_media2 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 2)->get();
        $ts2_media2_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 2)->where('is_approved', 1)->get();

    // media 3
        $ts_media3 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 3)->get();
        $ts_media3_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 3)->where('is_approved', 1)->get();
        $ts1_media3 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 3)->get();
        $ts1_media3_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 3)->where('is_approved', 1)->get();
        $ts2_media3 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 3)->get();
        $ts2_media3_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 3)->where('is_approved', 1)->get();
        
    // media 4
        $ts_media4 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 4)->get();
        $ts_media4_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 4)->where('is_approved', 1)->get();
        $ts1_media4 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 4)->get();
        $ts1_media4_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 4)->where('is_approved', 1)->get();
        $ts2_media4 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 4)->get();
        $ts2_media4_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 4)->where('is_approved', 1)->get();

    // media 5
        $ts_media5 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 5)->get();
        $ts_media5_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 5)->where('is_approved', 1)->get();
        $ts1_media5 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 5)->get();
        $ts1_media5_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 5)->where('is_approved', 1)->get();
        $ts2_media5 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 5)->get();
        $ts2_media5_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 5)->where('is_approved', 1)->get();

    // media 6
        $ts_media6 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 6)->get();
        $ts_media6_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 6)->where('is_approved', 1)->get();
        $ts1_media6 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 6)->get();
        $ts1_media6_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 6)->where('is_approved', 1)->get();
        $ts2_media6 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 6)->get();
        $ts2_media6_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 6)->where('is_approved', 1)->get();

    // media 7
        $ts_media7 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 7)->get();
        $ts_media7_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 7)->where('is_approved', 1)->get();
        $ts1_media7 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 7)->get();
        $ts1_media7_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 7)->where('is_approved', 1)->get();
        $ts2_media7 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 7)->get();
        $ts2_media7_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 7)->where('is_approved', 1)->get();

    // media 8
        $ts_media8 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 8)->get();
        $ts_media8_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 8)->where('is_approved', 1)->get();
        $ts1_media8 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 8)->get();
        $ts1_media8_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 8)->where('is_approved', 1)->get();
        $ts2_media8 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 8)->get();
        $ts2_media8_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 8)->where('is_approved', 1)->get();

    // media 9
        $ts_media9 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 9)->get();
        $ts_media9_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 9)->where('is_approved', 1)->get();
        $ts1_media9 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 9)->get();
        $ts1_media9_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 9)->where('is_approved', 1)->get();
        $ts2_media9 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 9)->get();
        $ts2_media9_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 9)->where('is_approved', 1)->get();

    // media 10
        $ts_media10 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 10)->get();
        $ts_media10_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where)->where('media_id', 10)->where('is_approved', 1)->get();
        $ts1_media10 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 10)->get();
        $ts1_media10_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where1)->where('media_id', 10)->where('is_approved', 1)->get();
        $ts2_media10 = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 10)->get();
        $ts2_media10_asesor = SdmKinerjaDosenPublikasiIlmiahDtps::with('media')->where($where2)->where('media_id', 10)->where('is_approved', 1)->get();
    // End media

        $jumlah_ts2 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where2)->sum('jumlah_ts');
        $jumlah_ts1 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where1)->sum('jumlah_ts');
        $jumlah_ts = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->sum('jumlah_ts');
        $jumlah = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->sum('jumlah');

        $na1 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 1)->sum('jumlah');
        $na2 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 2)->sum('jumlah');
        $na3 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 3)->sum('jumlah');
        $na4 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 4)->sum('jumlah');
        $nb1 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 5)->sum('jumlah');
        $nb2 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 6)->sum('jumlah');
        $nb3 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 7)->sum('jumlah');
        $nc1 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 8)->sum('jumlah');
        $nc2 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 9)->sum('jumlah');
        $nc3 = SdmKinerjaDosenPublikasiIlmiahDtps::where($where)->where('media_id', 10)->sum('jumlah');

        return [
        // TS
            'ts_all' => $ts_all,
            'ts' => $ts,
            'ts1' => $ts1,
            'ts2' => $ts2,
            'ts_media2' => $ts_media2,
            'ts1_media2' => $ts1_media2,
            'ts2_media2' => $ts2_media2,

            'ts_media3' => $ts_media3,
            'ts1_media3' => $ts1_media3,
            'ts2_media3' => $ts2_media3,

            'ts_media4' => $ts_media4,
            'ts1_media4' => $ts1_media4,
            'ts2_media4' => $ts2_media4,

            'ts_media5' => $ts_media5,
            'ts1_media5' => $ts1_media5,
            'ts2_media5' => $ts2_media5,

            'ts_media6' => $ts_media6,
            'ts1_media6' => $ts1_media6,
            'ts2_media6' => $ts2_media6,

            'ts_media7' => $ts_media7,
            'ts1_media7' => $ts1_media7,
            'ts2_media7' => $ts2_media7,

            'ts_media8' => $ts_media8,
            'ts1_media8' => $ts1_media8,
            'ts2_media8' => $ts2_media8,

            'ts_media9' => $ts_media9,
            'ts1_media9' => $ts1_media9,
            'ts2_media9' => $ts2_media9,

            'ts_media10' => $ts_media10,
            'ts1_media10' => $ts1_media10,
            'ts2_media10' => $ts2_media10,
        // End TS
            'jumlah_ts2' => $jumlah_ts2,
            'jumlah_ts1' => $jumlah_ts1,
            'jumlah_ts' => $jumlah_ts,
            'jumlah' => $jumlah,
            'na1' => $na1,
            'na2' => $na2,
            'na3' => $na3,
            'na4' => $na4,
            'nb1' => $nb1,
            'nb2' => $nb2,
            'nb3' => $nb3,
            'nc1' => $nc1,
            'nc2' => $nc2,
            'nc3' => $nc3,
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
    public function store(Request $req)
    {
        // $tahun = session('tahun_laporan');
        // $this->validate($req, [
        //     'media_publikasi' => 'required',
        //     'jumlah_ts2' => 'required',
        //     'jumlah_ts1' => 'required',
        //     'jumlah_ts' => 'required',
        // ]);

        // $pengakuan = new SdmKinerjaDosenPublikasiIlmiahDtps;
        // $pengakuan->media_publikasi = $req->input('media_publikasi');
        // $pengakuan->jumlah_ts2 = $req->input('jumlah_ts2');
        // $pengakuan->jumlah_ts1 = $req->input('jumlah_ts1');
        // $pengakuan->jumlah_ts = $req->input('jumlah_ts');
        // $pengakuan->jumlah = $req->jumlah_ts + $req->jumlah_ts1 + $req->jumlah_ts2;
        // $pengakuan->tahun_laporan = $tahun;
        // $pengakuan->prodi = auth()->user()->prodi->name;
        // $pengakuan->created_by = auth()->user()->name;
        // $pengakuan->created_at = Carbon::now();

        // return back()->with('success', 'Sdm Publikasi Ilmiah Dtps berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenPublikasiIlmiahDtps $sdmKinerjaDosenPublikasiIlmiahDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenPublikasiIlmiahDtps $sdmKinerjaDosenPublikasiIlmiahDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $year, $media)
    {
        $tahun = session('tahun_laporan');
        $this->validate($req, [
            'media_id' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
        ]);

        $jumlah = $req->input('jumlah_ts2') + $req->input('jumlah_ts1') + $req->input('jumlah_ts');
            SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $year-2)->where('media_id', $media)
            ->update([
                'media_id' => $req->input('media_id'),
                'jumlah_ts' => (int) $req->input('jumlah_ts2'),
                'tahun_laporan' => $tahun - 2,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS-1
            SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $year-1)->where('media_id', $media)
            ->update([
                'media_id' => $req->input('media_id'),
                'jumlah_ts' => (int) $req->input('jumlah_ts1'),
                'tahun_laporan' => $tahun - 1,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS
            SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $year)->where('media_id', $media)
            ->update([
                'media_id' => $req->input('media_id'),
                'jumlah_ts' => (int) $req->input('jumlah_ts'),
                'jumlah' => $jumlah,
                'tahun_laporan' => $tahun,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
        return back()->with('success', 'Sdm Publikasi Ilmiah Dtps berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $year, $media)
    {
        $tahun = session('tahun_laporan');
        SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $year-2)->where('media_id', $media)
            ->update([
                'media_id' => $req->input('media_id'),
                'jumlah_ts' => null,
                'jumlah' => null,
                'tahun_laporan' => $tahun - 2,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS-1
            SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $year-1)->where('media_id', $media)
            ->update([
                'media_id' => $req->input('media_id'),
                'jumlah_ts' => null,
                'jumlah' => null,
                'tahun_laporan' => $tahun - 1,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS
            SdmKinerjaDosenPublikasiIlmiahDtps::where('tahun_laporan', $year)->where('media_id', $media)
            ->update([
                'media_id' => $req->input('media_id'),
                'jumlah_ts' => null,
                'jumlah' => null,
                'tahun_laporan' => $tahun,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
        return back()->with('success', 'Sdm Publikasi Ilmiah Dtps berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new KinerjaDosenPublikasiExport, 'kinerja-dosen-publikasi-ilmiah-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new KinerjaDosenPublikasiExport, 'kinerja-dosen-publikasi-ilmiah-dtps.csv');
    }

    public function approve($id)
    {
        $data = SdmKinerjaDosenPublikasiIlmiahDtps::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Kinerja Dosen Publikasi Ilmiah Dtps telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Kinerja Dosen Publikasi Ilmiah Dtps berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = SdmKinerjaDosenPublikasiIlmiahDtps::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Kinerja Dosen Publikasi Ilmiah Dtps berhasil ditolak.');
    }
}
