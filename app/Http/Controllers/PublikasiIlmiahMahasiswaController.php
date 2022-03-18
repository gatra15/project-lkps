<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PublikasiIlmiahMahasiswa;
use Laravel\Sail\Console\PublishCommand;
use Svg\Tag\Rect;

class PublikasiIlmiahMahasiswaController extends Controller
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
        $cek = PublikasiIlmiahMahasiswa::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();
        $cek1 = PublikasiIlmiahMahasiswa::where('tahun_laporan', $tahun - 1)->where('prodi', $prodi)->exists();
        $cek2 = PublikasiIlmiahMahasiswa::where('tahun_laporan', $tahun - 2)->where('prodi', $prodi)->exists();

        // cek media
        $media = PublikasiIlmiahMahasiswa::where('media_id', 1)->exists();
        $media2 = PublikasiIlmiahMahasiswa::where('media_id', 2)->exists();
        $media3 = PublikasiIlmiahMahasiswa::where('media_id', 3)->exists();
        $media4 = PublikasiIlmiahMahasiswa::where('media_id', 4)->exists();
        $media5 = PublikasiIlmiahMahasiswa::where('media_id', 5)->exists();
        $media6 = PublikasiIlmiahMahasiswa::where('media_id', 6)->exists();
        $media7 = PublikasiIlmiahMahasiswa::where('media_id', 7)->exists();
        $media8 = PublikasiIlmiahMahasiswa::where('media_id', 8)->exists();
        $media9 = PublikasiIlmiahMahasiswa::where('media_id', 9)->exists();
        $media10 = PublikasiIlmiahMahasiswa::where('media_id', 10)->exists();
        
        // dd($media2);
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun - 1, 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun - 2, 'prodi' => $prodi];
    
    // Cek 1
        if(!($cek2 && $media)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 1,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 1,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 1,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 2
        if(!($cek2 && $media2)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 2,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media2)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 2,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media2)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 2,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 3
        if(!($cek2 && $media3)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 3,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media3)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 3,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media3)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 3,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 4
        if(!($cek2 && $media4)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 4,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media4)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 4,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media4)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 4,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 5
        if(!($cek2 && $media5)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 5,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media5)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 5,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media5)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 5,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 6
        if(!($cek2 && $media6)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 6,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media6)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 6,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media6)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 6,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 7
        if(!($cek2 && $media7)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 7,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media7)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 7,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media7)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 7,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 8
        if(!($cek2 && $media8)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 8,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media8)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 8,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media8)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 8,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 9
        if(!($cek2 && $media9)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 9,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media9)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 9,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media9)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 9,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 10
        if(!($cek2 && $media10)){
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 10,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $media10)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 10,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $media10)) {
            PublikasiIlmiahMahasiswa::create([
                'media_id' => 10,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }
    // End Cek

    // media 1
        $ts_all = PublikasiIlmiahMahasiswa::with('media')->where($where)->get();
        $ts = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 1)->get();
        $ts1 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 1)->get();
        $ts2 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 1)->get();
        
    // media 2
        $ts_media2 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 2)->get();
        $ts1_media2 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 2)->get();
        $ts2_media2 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 2)->get();

    // media 3
        $ts_media3 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 3)->get();
        $ts1_media3 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 3)->get();
        $ts2_media3 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 3)->get();
        
    // media 4
        $ts_media4 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 4)->get();
        $ts1_media4 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 4)->get();
        $ts2_media4 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 4)->get();

    // media 5
        $ts_media5 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 5)->get();
        $ts1_media5 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 5)->get();
        $ts2_media5 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 5)->get();

    // media 6
        $ts_media6 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 6)->get();
        $ts1_media6 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 6)->get();
        $ts2_media6 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 6)->get();

    // media 7
        $ts_media7 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 7)->get();
        $ts1_media7 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 7)->get();
        $ts2_media7 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 7)->get();

    // media 8
        $ts_media8 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 8)->get();
        $ts1_media8 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 8)->get();
        $ts2_media8 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 8)->get();

    // media 9
        $ts_media9 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 9)->get();
        $ts1_media9 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 9)->get();
        $ts2_media9 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 9)->get();

    // media 10
        $ts_media10 = PublikasiIlmiahMahasiswa::with('media')->where($where)->where('media_id', 10)->get();
        $ts1_media10 = PublikasiIlmiahMahasiswa::with('media')->where($where1)->where('media_id', 10)->get();
        $ts2_media10 = PublikasiIlmiahMahasiswa::with('media')->where($where2)->where('media_id', 10)->get();
    // End media

        $jumlah_ts2 = PublikasiIlmiahMahasiswa::where($where2)->sum('jumlah_ts');
        $jumlah_ts1 = PublikasiIlmiahMahasiswa::where($where1)->sum('jumlah_ts');
        $jumlah_ts = PublikasiIlmiahMahasiswa::where($where)->sum('jumlah_ts');
        $jumlah = PublikasiIlmiahMahasiswa::where($where)->sum('jumlah');
        return [
        // TS
            'data' => $ts_all,
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
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(PublikasiIlmiahMahasiswa $publikasiIlmiahMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PublikasiIlmiahMahasiswa $publikasiIlmiahMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $year, $media)
    {
        $tahun = session('tahun_laporan');
        $this->validate($request, [
            'media_id' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
        ]);

        $jumlah = $request->input('jumlah_ts2') + $request->input('jumlah_ts1') + $request->input('jumlah_ts');
            PublikasiIlmiahMahasiswa::where('tahun_laporan', $year-2)->where('media_id', $media)
            ->update([
                'media_id' => $request->input('media_id'),
                'jumlah_ts' => (int) $request->input('jumlah_ts2'),
                'tahun_laporan' => $tahun - 2,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS-1
            PublikasiIlmiahMahasiswa::where('tahun_laporan', $year-1)->where('media_id', $media)
            ->update([
                'media_id' => $request->input('media_id'),
                'jumlah_ts' => (int) $request->input('jumlah_ts1'),
                'tahun_laporan' => $tahun - 1,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS
            PublikasiIlmiahMahasiswa::where('tahun_laporan', $year)->where('media_id', $media)
            ->update([
                'media_id' => $request->input('media_id'),
                'jumlah_ts' => (int) $request->input('jumlah_ts'),
                'jumlah' => $jumlah,
                'tahun_laporan' => $tahun,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
        return back()->with('success', 'Data Publikasi Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PublikasiIlmiahMahasiswa  $publikasiIlmiahMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $year, $media)
    {
        $tahun = session('tahun_laporan');
        PublikasiIlmiahMahasiswa::where('tahun_laporan', $year-2)->where('media_id', $media)
            ->update([
                'media_id' => $request->input('media_id'),
                'jumlah_ts' => null,
                'jumlah' => null,
                'tahun_laporan' => $tahun - 2,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS-1
            PublikasiIlmiahMahasiswa::where('tahun_laporan', $year-1)->where('media_id', $media)
            ->update([
                'media_id' => $request->input('media_id'),
                'jumlah_ts' => null,
                'jumlah' => null,
                'tahun_laporan' => $tahun - 1,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
    
            // TS
            PublikasiIlmiahMahasiswa::where('tahun_laporan', $year)->where('media_id', $media)
            ->update([
                'media_id' => $request->input('media_id'),
                'jumlah_ts' => null,
                'jumlah' => null,
                'tahun_laporan' => $tahun,
                'prodi' => auth()->user()->prodi->name,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now(),
            ]);
        return back()->with('error', 'Data Publikasi Mahasiswa berhasil dihapus.');
    }
}
