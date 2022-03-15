<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EfektifitasProduktifitasPendidikan;
use Carbon\Carbon;

class EfektifitasProduktifitasPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $efektifitas = EfektifitasProduktifitasPendidikan::with('tahun')->get();
        return ['efektifitas' => $efektifitas];
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
     * @param  \App\Models\EfektifitasProduktifitasPendidikan  $efektifitasProduktifitasPendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(EfektifitasProduktifitasPendidikan $efektifitasProduktifitasPendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EfektifitasProduktifitasPendidikan  $efektifitasProduktifitasPendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit(EfektifitasProduktifitasPendidikan $efektifitasProduktifitasPendidikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EfektifitasProduktifitasPendidikan  $efektifitasProduktifitasPendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $connection = 'mysql';
        $request->validate([
            'tahun_id' => 'required',
            'jumlah_mahasiswa' => 'required',
            'ts' => 'required',
        ]);

        try{
            $data = EfektifitasProduktifitasPendidikan::find($id);
            $data->tahun_id = $request->input('tahun_id');
            $data->jumlah_mahasiswa = (int) $request->input('jumlah_mahasiswa');
            $data->ts3 = (int) $request->input('ts3');
            $data->ts2 = (int) $request->input('ts2');
            $data->ts1 = (int) $request->input('ts1');
            $data->ts = (int) $request->input('ts');
            $data->jumlah = (int) ($request->ts2 + $request->ts1 + $request->ts );
            $data->average = (float) $request->jumlah/3;
            $data->tahun_laporan = 2020;
            $data->prodi = auth()->user()->prodi;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Efektifitas Produktifitas Pendidikan berhasil ditambahkan.');
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
     * @param  \App\Models\EfektifitasProduktifitasPendidikan  $efektifitasProduktifitasPendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $connection = 'mysql';
        try{
            $data = EfektifitasProduktifitasPendidikan::find($id);
            $data->tahun_id = $request->input('tahun_id');
            $data->jumlah_mahasiswa = null;
            $data->ts3 = null;
            $data->ts2 = null;
            $data->ts1 = null;
            $data->ts = null;
            $data->tahun_laporan = 2020;
            $data->prodi = auth()->user()->prodi;
            $data->updated_by = auth()->user()->name;
            $data->updated_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Efektifitas Produktifitas Pendidikan berhasil ditambahkan.');
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }
}
