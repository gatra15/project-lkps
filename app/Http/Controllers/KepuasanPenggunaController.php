<?php

namespace App\Http\Controllers;

use App\Exports\KepuasanPenggunaExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\KepuasanPengguna;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class KepuasanPenggunaController extends Controller
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

        $cek = KepuasanPengguna::with('kemampuan')->where('tahun_laporan', $tahun)->exists();

        if(!$cek)
        {
            KepuasanPengguna::create([
                'kemampuan_id' => 1, 
                'tahun_laporan' => $tahun,
                'prodi' => 'Teknik',
            ]);
            KepuasanPengguna::create([
                'kemampuan_id' => 2, 
                'tahun_laporan' => $tahun,
                'prodi' => 'Teknik',
            ]);
            KepuasanPengguna::create([
                'kemampuan_id' => 3, 
                'tahun_laporan' => $tahun,
                'prodi' => 'Teknik',
            ]);
            KepuasanPengguna::create([
                'kemampuan_id' => 4, 
                'tahun_laporan' => $tahun,
                'prodi' => 'Teknik',
            ]);
            KepuasanPengguna::create([
                'kemampuan_id' => 5, 
                'tahun_laporan' => $tahun,
                'prodi' => 'Teknik',
            ]);
            KepuasanPengguna::create([
                'kemampuan_id' => 6, 
                'tahun_laporan' => $tahun,
                'prodi' => 'Teknik',
            ]);
            KepuasanPengguna::create([
                'kemampuan_id' => 7, 
                'tahun_laporan' => $tahun,
                'prodi' => 'Teknik',
            ]);
        }
        $kepuasan = KepuasanPengguna::with('kemampuan')->where('tahun_laporan', $tahun)->get();
        $sangat_baik = KepuasanPengguna::where('tahun_laporan', $tahun)->sum('sangat_baik');
        $baik = KepuasanPengguna::where('tahun_laporan', $tahun)->sum('baik');
        $cukup = KepuasanPengguna::where('tahun_laporan', $tahun)->sum('cukup');
        $kurang = KepuasanPengguna::where('tahun_laporan', $tahun)->sum('kurang');
        $kepuasan_asesor = KepuasanPengguna::with('kemampuan')->where('tahun_laporan', $tahun)->where('is_approved', 1)->get();
        $sangat_baik_asesor = KepuasanPengguna::where('tahun_laporan', $tahun)->where('is_approved', 1)->sum('sangat_baik');
        $baik_asesor = KepuasanPengguna::where('tahun_laporan', $tahun)->where('is_approved', 1)->sum('baik');
        $cukup_asesor = KepuasanPengguna::where('tahun_laporan', $tahun)->where('is_approved', 1)->sum('cukup');
        $kurang_asesor = KepuasanPengguna::where('tahun_laporan', $tahun)->where('is_approved', 1)->sum('kurang');
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];

        $tkp1 = [
            'a1' => KepuasanPengguna::where($where)->where('kemampuan_id', 1)->sum('sangat_baik'),
            'b1' => KepuasanPengguna::where($where)->where('kemampuan_id', 1)->sum('baik'),
            'c1' => KepuasanPengguna::where($where)->where('kemampuan_id', 1)->sum('cukup'),
            'd1' => KepuasanPengguna::where($where)->where('kemampuan_id', 1)->sum('kurang')
        ];
        $tkp2 = [
            'a2' => KepuasanPengguna::where($where)->where('kemampuan_id', 2)->sum('sangat_baik'),
            'b2' => KepuasanPengguna::where($where)->where('kemampuan_id', 2)->sum('baik'),
            'c2' => KepuasanPengguna::where($where)->where('kemampuan_id', 2)->sum('cukup'),
            'd2' => KepuasanPengguna::where($where)->where('kemampuan_id', 2)->sum('kurang')
        ];
        $tkp3 = [
            'a3' => KepuasanPengguna::where($where)->where('kemampuan_id', 3)->sum('sangat_baik'),
            'b3' => KepuasanPengguna::where($where)->where('kemampuan_id', 3)->sum('baik'),
            'c3' => KepuasanPengguna::where($where)->where('kemampuan_id', 3)->sum('cukup'),
            'd3' => KepuasanPengguna::where($where)->where('kemampuan_id', 3)->sum('kurang')
        ];
        $tkp4 = [
            'a4' => KepuasanPengguna::where($where)->where('kemampuan_id', 4)->sum('sangat_baik'),
            'b4' => KepuasanPengguna::where($where)->where('kemampuan_id', 4)->sum('baik'),
            'c4' => KepuasanPengguna::where($where)->where('kemampuan_id', 4)->sum('cukup'),
            'd4' => KepuasanPengguna::where($where)->where('kemampuan_id', 4)->sum('kurang')
        ];
        $tkp5 = [
            'a5' => KepuasanPengguna::where($where)->where('kemampuan_id', 5)->sum('sangat_baik'),
            'b5' => KepuasanPengguna::where($where)->where('kemampuan_id', 5)->sum('baik'),
            'c5' => KepuasanPengguna::where($where)->where('kemampuan_id', 5)->sum('cukup'),
            'd5' => KepuasanPengguna::where($where)->where('kemampuan_id', 5)->sum('kurang')
        ];
        $tkp6 = [
            'a6' => KepuasanPengguna::where($where)->where('kemampuan_id', 6)->sum('sangat_baik'),
            'b6' => KepuasanPengguna::where($where)->where('kemampuan_id', 6)->sum('baik'),
            'c6' => KepuasanPengguna::where($where)->where('kemampuan_id', 6)->sum('cukup'),
            'd6' => KepuasanPengguna::where($where)->where('kemampuan_id', 6)->sum('kurang')
        ];
        $tkp7 = [
            'a7' => KepuasanPengguna::where($where)->where('kemampuan_id', 7)->sum('sangat_baik'),
            'b7' => KepuasanPengguna::where($where)->where('kemampuan_id', 7)->sum('baik'),
            'c7' => KepuasanPengguna::where($where)->where('kemampuan_id', 7)->sum('cukup'),
            'd7' => KepuasanPengguna::where($where)->where('kemampuan_id', 7)->sum('kurang')
        ];
        return [
            'kepuasan' => $kepuasan,
            'sangat_baik' => $sangat_baik,
            'baik' => $baik,
            'cukup' => $cukup,
            'kurang' => $kurang,
            'kepuasan_asesor' => $kepuasan_asesor,
            'sangat_baik_asesor' => $sangat_baik_asesor,
            'baik_asesor' => $baik_asesor,
            'cukup_asesor' => $cukup_asesor,
            'kurang_asesor' => $kurang_asesor,
            'tkp1' => $tkp1,
            'tkp2' => $tkp2,
            'tkp3' => $tkp3,
            'tkp4' => $tkp4,
            'tkp5' => $tkp5,
            'tkp6' => $tkp6,
            'tkp7' => $tkp7,
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
     * @param  \App\Models\KepuasanPengguna  $kepuasanPengguna
     * @return \Illuminate\Http\Response
     */
    public function show(KepuasanPengguna $kepuasanPengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KepuasanPengguna  $kepuasanPengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(KepuasanPengguna $kepuasanPengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KepuasanPengguna  $kepuasanPengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tahun = session('tahun_laporan');
        // $request->validate([
        //     'kemampuan_id' => 'required',
        //     'sangat_baik' => 'required',
        //     'baik' => 'required',
        //     'cukup' => 'required',
        //     'kurang' => 'required',
        //     'rencana_tindak_lanjut' => 'required',
        // ]);

        $connection = 'mysql';
        try{
            $data = KepuasanPengguna::find($id);
            $data->kemampuan_id = $request->input('kemampuan_id');
            $data->sangat_baik = (int) $request->input('sangat_baik');
            $data->baik = (int) $request->input('baik');
            $data->cukup = (int) $request->input('cukup');
            $data->kurang = (int) $request->input('kurang');
            $data->rencana_tindak_lanjut = $request->input('rencana_tindak_lanjut');
            $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Kepuasan Pengguna berhasil ditambahkan.');
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KepuasanPengguna  $kepuasanPengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        try{
            $data = KepuasanPengguna::find($id);
            $data->kemampuan_id = $request->input('kemampuan_id');
            $data->sangat_baik = null;
            $data->baik = null;
            $data->cukup = null;
            $data->kurang = null;
            $data->rencana_tindak_lanjut = null;
            $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Kepuasan Pengguna berhasil dihapus.');
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }

    public function exportToExcel()
    {
        return Excel::download(new KepuasanPenggunaExport, 'kepuasan-pengguna.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new KepuasanPenggunaExport, 'kepuasan-pengguna.csv');
    }

    public function approve($id)
    {
        $data = KepuasanPengguna::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Luaran Kepuasan Pengguna telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Luaran Kepuasan Pengguna berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = KepuasanPengguna::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Luaran Kepuasan Pengguna berhasil ditolak.');
    }
}
