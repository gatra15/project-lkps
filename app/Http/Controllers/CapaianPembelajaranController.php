<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CapaianPembelajaran;

class CapaianPembelajaranController extends Controller
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
        $cek = CapaianPembelajaran::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();
        $cek1 = CapaianPembelajaran::where('tahun_laporan', $tahun - 1)->where('prodi', $prodi)->exists();
        $cek2 = CapaianPembelajaran::where('tahun_laporan', $tahun - 2)->where('prodi', $prodi)->exists();

        if (!$cek2){
            CapaianPembelajaran::create([
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        }
        if (!$cek1){
            CapaianPembelajaran::create([
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!$cek){
            CapaianPembelajaran::create([
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }
        $where = [
            ['prodi', '=', $prodi],
            ['tahun_laporan', '<=', $tahun],
            ['tahun_laporan', '>=', $tahun-2]
        ];

        $capaian = CapaianPembelajaran::where($where)->get();
        $ripk = CapaianPembelajaran::where($where)->sum('ipk_avg');
        return [
            'capaian' => $capaian,
            'ripk' => $ripk,
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
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(CapaianPembelajaran $capaianPembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(CapaianPembelajaran $capaianPembelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $connection = 'mysql';
        $this->validate($req, [
            'jumlah_lulusan' => 'required',
            'ipk_min' => 'required',
            'ipk_avg' => 'required',
            'ipk_max' => 'required',
        ]);

    try{
        $data = CapaianPembelajaran::find($id);
        $data->jumlah_lulusan = (integer) $req->input('jumlah_lulusan');
        $data->ipk_min = (float) $req->input('ipk_min');
        $data->ipk_avg = (float) $req->input('ipk_avg');
        $data->ipk_max = (float) $req->input('ipk_max');

        $data->prodi = auth()->user()->prodi->name;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->update();
        return back()->with('success', 'Data Capaian Pembelajaran berhasil ditambahkan.');

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
     * @param  \App\Models\CapaianPembelajaran  $capaianPembelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $connection = 'mysql';

    try{
        $data = CapaianPembelajaran::find($id);
        $data->jumlah_lulusan = null;
        $data->ipk_min = null;
        $data->ipk_avg = null;
        $data->ipk_max = null;

        $data->prodi = auth()->user()->prodi->name;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();

        return back()->with('success', 'Data Capaian Pembelajaran Berhasil dihapus.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }
}
