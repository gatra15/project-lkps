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
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where3 = ['tahun_laporan' => $tahun - 3, 'prodi' => $prodi];
        $where4 = ['tahun_laporan' => $tahun - 4, 'prodi' => $prodi];
        $where5 = ['tahun_laporan' => $tahun - 5, 'prodi' => $prodi];
        $where6 = ['tahun_laporan' => $tahun - 6, 'prodi' => $prodi];
    
    // Cek
        $cek3 = EfektifitasProduktifitasPendidikan::where($where3)->exists();
        $cek4 = EfektifitasProduktifitasPendidikan::where($where4)->exists();
        $cek5 = EfektifitasProduktifitasPendidikan::where($where5)->exists();
        $cek6 = EfektifitasProduktifitasPendidikan::where($where6)->exists();
    // End Cek

    if(!$cek6)
    {
        EfektifitasProduktifitasPendidikan::create([
            'tahun_id' => 1,
            'tahun_laporan' => $tahun - 6,
            'prodi' => $prodi,
        ]);
    }
    if(!$cek5)
    {
        EfektifitasProduktifitasPendidikan::create([
            'tahun_id' => 2,
            'tahun_laporan' => $tahun - 5,
            'prodi' => $prodi,
        ]);
    }
    if(!$cek4)
    {
        EfektifitasProduktifitasPendidikan::create([
            'tahun_id' => 3,
            'tahun_laporan' => $tahun - 4,
            'prodi' => $prodi,
        ]);
    }
    if(!$cek3)
    {
        EfektifitasProduktifitasPendidikan::create([
            'tahun_id' => 4,
            'tahun_laporan' => $tahun - 3,
            'prodi' => $prodi,
        ]);
    }

    $where = [
        ['prodi', '=', $prodi],
        ['tahun_laporan', '<=', $tahun-3],
        ['tahun_laporan', '>=', $tahun-6]
    ];

        $ts_all = EfektifitasProduktifitasPendidikan::where($where)->get();
        $ts3 = EfektifitasProduktifitasPendidikan::where($where3)->get();
        // $ts4 = EfektifitasProduktifitasPendidikan::with('tahun')->where($where4)->get();
        // $ts5 = EfektifitasProduktifitasPendidikan::with('tahun')->where($where5)->get();
        // $ts6 = EfektifitasProduktifitasPendidikan::with('tahun')->where($where6)->get();
        return [
            'data' => $ts_all,
            'ts3' => $ts3,
            // 'ts4' => $ts4,
            // 'ts5' => $ts5,
            // 'ts6' => $ts6,
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
        $tahun = session('tahun_laporan');
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
            $data->jumlah = (int) ($request->ts3 + $request->ts2 + $request->ts1 + $request->ts );
            $data->average = (float) ($data->jumlah)/4;
            // $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            // dd($data);
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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        try{
            $data = EfektifitasProduktifitasPendidikan::find($id);
            $data->tahun_id = $request->input('tahun_id');
            $data->jumlah_mahasiswa = null;
            $data->ts3 = null;
            $data->ts2 = null;
            $data->ts1 = null;
            $data->ts = null;
            $data->tahun_laporan = $tahun;
            $data->prodi = auth()->user()->prodi->name;
            $data->updated_by = auth()->user()->name;
            $data->updated_at = Carbon::now();
            $data->update();

            return back()->with('success', 'Data Efektifitas Produktifitas Pendidikan berhasil dihapus.');
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }
}
