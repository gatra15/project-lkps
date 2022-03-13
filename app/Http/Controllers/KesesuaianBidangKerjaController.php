<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KesesuaianBidangKerja;

class KesesuaianBidangKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidang = KesesuaianBidangKerja::with('tahun')->get();
        return ['bidang' => $bidang];
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
     * @param  \App\Models\KesesuaianBidangKerja  $kesesuaianBidangKerja
     * @return \Illuminate\Http\Response
     */
    public function show(KesesuaianBidangKerja $kesesuaianBidangKerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KesesuaianBidangKerja  $kesesuaianBidangKerja
     * @return \Illuminate\Http\Response
     */
    public function edit(KesesuaianBidangKerja $kesesuaianBidangKerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KesesuaianBidangKerja  $kesesuaianBidangKerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun_id' => 'required',
            'jumlah_lulusan' => 'required',
            'jumlah_lulusan_terlacak' => 'required',
            'kesesuaian_rendah' => 'required',
            'waktu_tunggu_6_18' => 'required',
            'waktu_tunggu_18' => 'required',
        ]);

        $connection = 'mysql';
        try{
            $data = KesesuaianBidangKerja::find($id);
            $data->tahun_id = $request->input('tahun_id');
            $data->jumlah_lulusan = (int) $request->input('jumlah_lulusan');
            $data->jumlah_lulusan_terlacak = (int) $request->input('jumlah_lulusan_terlacak');
            $data->kesesuaian_rendah = $request->input('kesesuaian_rendah');
            $data->kesesuaian_sedang = $request->input('kesesuaian_sedang');
            $data->kesesuaian_tinggi = $request->input('kesesuaian_tinggi');
            $data->tahun_laporan = 2022;
            $data->prodi = auth()->user()->prodi;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Kinerja Bidang Kerja berhasil ditambahkan.');
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
     * @param  \App\Models\KesesuaianBidangKerja  $kesesuaianBidangKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $connection = 'mysql';
        try{
            $data = KesesuaianBidangKerja::find($id);
            $data->tahun_id = $request->input('tahun_id');
            $data->jumlah_lulusan = null;
            $data->jumlah_lulusan_terlacak = null;
            $data->kesesuaian_rendah = null;
            $data->kesesuaian_sedang = null;
            $data->kesesuaian_tinggi = null;
            $data->tahun_laporan = 2022;
            $data->prodi = auth()->user()->prodi;
            $data->updated_by = auth()->user()->name;
            $data->updated_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Kinerja Bidang Kerja berhasil dihapus.');
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }
}
