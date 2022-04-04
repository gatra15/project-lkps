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
        $tahun = (int) session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $cek2 = KesesuaianBidangKerja::where('tahun_laporan', $tahun - 2)->where('prodi', $prodi)->exists();
        $cek3 = KesesuaianBidangKerja::where('tahun_laporan', $tahun - 3)->where('prodi', $prodi)->exists();
        $cek4 = KesesuaianBidangKerja::where('tahun_laporan', $tahun - 4)->where('prodi', $prodi)->exists();

        if (!$cek4){
            KesesuaianBidangKerja::create([
                'tahun_laporan' => $tahun - 4,
                'prodi' => $prodi
            ]);
        }
        if (!$cek3){
            KesesuaianBidangKerja::create([
                'tahun_laporan' => $tahun - 3,
                'prodi' => $prodi
            ]);
        }
        if (!$cek2){
            KesesuaianBidangKerja::create([
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        }
            
        $where = [
            ['prodi', '=', $prodi],
            ['tahun_laporan', '<=', $tahun-2],
            ['tahun_laporan', '>=', $tahun-4]
        ];



        $bidang = KesesuaianBidangKerja::where($where)->get();
        $rendah = KesesuaianBidangKerja::where($where)->sum('kesesuaian_rendah');
        $sedang = KesesuaianBidangKerja::where($where)->sum('kesesuaian_sedang');
        $tinggi = KesesuaianBidangKerja::where($where)->sum('kesesuaian_tinggi');
        $jumlah = KesesuaianBidangKerja::where($where)->sum('kesesuaian_rendah', 'kesesuaian_sedang', 'kesesuaian_tinggi');
        $nl = KesesuaianBidangKerja::where($where)->sum('jumlah_lulusan');
        $nj = KesesuaianBidangKerja::where($where)->sum('jumlah_lulusan_terlacak');
        return [
            'bidang' => $bidang,
            'rendah' => $rendah,
            'sedang' => $sedang,
            'tinggi' => $tinggi,
            'jumlah' => $jumlah,
            'nl' => $nl,
            'nj' => $nj,
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
        $tahun = session('tahun_laporan');
        $request->validate([
            'jumlah_lulusan' => 'required',
            'jumlah_lulusan_terlacak' => 'required',
            'kesesuaian_rendah' => 'required',
            'kesesuaian_sedang' => 'required',
            'kesesuaian_tinggi' => 'required',
        ]);

        $connection = 'mysql';
        try{
            $data = KesesuaianBidangKerja::find($id);
            $data->jumlah_lulusan = (int) $request->input('jumlah_lulusan');
            $data->jumlah_lulusan_terlacak = (int) $request->input('jumlah_lulusan_terlacak');
            $data->kesesuaian_rendah = (int) $request->input('kesesuaian_rendah');
            $data->kesesuaian_sedang = (int) $request->input('kesesuaian_sedang');
            $data->kesesuaian_tinggi = (int) $request->input('kesesuaian_tinggi');
            // $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            // ddd($data);
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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        try{
            $data = KesesuaianBidangKerja::find($id);
            $data->jumlah_lulusan = null;
            $data->jumlah_lulusan_terlacak = null;
            $data->kesesuaian_rendah = null;
            $data->kesesuaian_sedang = null;
            $data->kesesuaian_tinggi = null;
            // $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
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

    public function approve($id)
    {
        $data = KesesuaianBidangKerja::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Luaran Kesesuaian Bidang Kerja telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }

    public function tolak(Request $req, $id)
    {
        $data = KesesuaianBidangKerja::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }
}
