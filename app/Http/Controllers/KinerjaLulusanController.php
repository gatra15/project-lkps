<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\KinerjaLulusan;
use Illuminate\Support\Facades\DB;

class KinerjaLulusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KinerjaLulusan::with('tahun')->get();
        $jumlah = KinerjaLulusan::sum('jumlah_lulusan');
        $jumlah2 = KinerjaLulusan::sum('jumlah_lulusan_terlacak');
        $wilayah = KinerjaLulusan::sum('tempat_wilayah_tidak_berizin');
        $nasional = KinerjaLulusan::sum('tempat_nasional_berizin');
        $internasional = KinerjaLulusan::sum('internasional');
        return [
            'data' => $data,
            'jumlah' => $jumlah,
            'jumlah2' => $jumlah2,
            'wilayah' => $wilayah,
            'nasional' => $nasional,
            'internasional' => $internasional,
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
     * @param  \App\Models\KinerjaLulusan  $kinerjaLulusan
     * @return \Illuminate\Http\Response
     */
    public function show(KinerjaLulusan $kinerjaLulusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KinerjaLulusan  $kinerjaLulusan
     * @return \Illuminate\Http\Response
     */
    public function edit(KinerjaLulusan $kinerjaLulusan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KinerjaLulusan  $kinerjaLulusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun_id'=> 'required',
            'jumlah_lulusan'=> 'required',
            'jumlah_lulusan_terlacak'=> 'required',
            'tempat_wilayah_tidak_berizin'=> 'required',
            'tempat_nasional_berizin'=> 'required',
            'internasional'=> 'required',
        ]);

        $connection = 'mysql';
        try{
            $data = KinerjaLulusan::find($id);
            $data->tahun_id = $request->input('tahun_id');
            $data->jumlah_lulusan = (int) $request->input('jumlah_lulusan');
            $data->jumlah_lulusan_terlacak = (int) $request->input('jumlah_lulusan_terlacak');
            $data->tempat_wilayah_tidak_berizin = $request->input('tempat_wilayah_tidak_berizin');
            $data->tempat_nasional_berizin = $request->input('tempat_nasional_berizin');
            $data->internasional = $request->input('internasional');
            $data->tahun_laporan = 2022;
            $data->prodi = auth()->user()->prodi;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Kinerja Lulusan berhasil ditambahkan.');
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
     * @param  \App\Models\KinerjaLulusan  $kinerjaLulusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $connection = 'mysql';
        try{
            $data = KinerjaLulusan::find($id);
            $data->tahun_id = $request->input('tahun_id');
            $data->jumlah_lulusan = null;
            $data->jumlah_lulusan_terlacak = null;
            $data->tempat_wilayah_tidak_berizin = null;
            $data->tempat_nasional_berizin = null;
            $data->internasional = null;
            $data->tahun_laporan = 2022;
            $data->prodi = auth()->user()->prodi;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Kinerja Lulusan berhasil dihapus.');
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }
}
