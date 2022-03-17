<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\WaktuTungguLulusan;
use Illuminate\Support\Facades\DB;
use Svg\Tag\Rect;

class WaktuTungguLulusanController extends Controller
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
        $cek = WaktuTungguLulusan::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();

        if (!$cek){
            WaktuTungguLulusan::create([
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }
            
        $where = [
            ['prodi', '=', $prodi],
            ['tahun_laporan', '<=', $tahun-2],
            ['tahun_laporan', '>=', $tahun-4]
        ];

        $waktu = WaktuTungguLulusan::where($where)->get();
        return ['waktu' => $waktu];
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
     * @param  \App\Models\WaktuTungguLulusan  $waktuTungguLulusan
     * @return \Illuminate\Http\Response
     */
    public function show(WaktuTungguLulusan $waktuTungguLulusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WaktuTungguLulusan  $waktuTungguLulusan
     * @return \Illuminate\Http\Response
     */
    public function edit(WaktuTungguLulusan $waktuTungguLulusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WaktuTungguLulusan  $waktuTungguLulusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tahun = session('tahun_laporan');
        $request->validate([
            'jumlah_lulusan' => 'required',
            'jumlah_lulusan_terlacak' => 'required',
            'waktu_tunggu_6' => 'required',
            'waktu_tunggu_6_18' => 'required',
            'waktu_tunggu_18' => 'required',
        ]);

        $connection = 'mysql';
        try{
            $data = WaktuTungguLulusan::find($id);
            $data->jumlah_lulusan = (int) $request->input('jumlah_lulusan');
            $data->jumlah_lulusan_terlacak = (int) $request->input('jumlah_lulusan_terlacak');
            $data->waktu_tunggu_6 = (int) $request->input('waktu_tunggu_6');
            $data->waktu_tunggu_6_18 = (int) $request->input('waktu_tunggu_6_18');
            $data->waktu_tunggu_18 = (int) $request->input('waktu_tunggu_18');
            $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Waktu Tunggu Lulusan berhasil ditambahkan.');
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
     * @param  \App\Models\WaktuTungguLulusan  $waktuTungguLulusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        try{
            $data = WaktuTungguLulusan::find($id);
            $data->jumlah_lulusan = null;
            $data->jumlah_lulusan_terlacak = null;
            $data->waktu_tunggu_6 = null;
            $data->waktu_tunggu_6_18 = null;
            $data->waktu_tunggu_18 = null;
            $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
            $data->updated_by = auth()->user()->name;
            $data->updated_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Waktu Tunggu Lulusan berhasil dihapus.');
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }
}
