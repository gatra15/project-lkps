<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\KepuasanPengguna;
use Illuminate\Support\Facades\DB;

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
        return [
            'kepuasan' => $kepuasan,
            'sangat_baik' => $sangat_baik,
            'baik' => $baik,
            'cukup' => $cukup,
            'kurang' => $kurang,
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
}
