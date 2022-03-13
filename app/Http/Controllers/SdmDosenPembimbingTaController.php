<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SdmDosenPembimbingTa;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DosenPembimbingTAExport;

class SdmDosenPembimbingTaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosenta = SdmDosenPembimbingTa::all();
        return [
            'dosen' => $dosenta,
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
        $connection = 'mysql';
        $rule = [
            'nama' => 'required',
            'jumlah_ps_akreditasi_ts2' => 'required',
            'jumlah_ps_akreditasi_ts1' => 'required',
            'jumlah_ps_akreditasi_ts' => 'required',
            'jumlah_ps_lain_ts2' => 'required',
            'jumlah_ps_lain_ts1' => 'required',
            'jumlah_ps_lain_ts' => 'required',
        ];
        $this->validate($req, $rule);

    try{
        $data = new SdmDosenPembimbingTa;
        $data->nama = $req->input('nama');
        $data->jumlah_ps_akreditasi_ts2 = (int) $req->input('jumlah_ps_akreditasi_ts2');
        $data->jumlah_ps_akreditasi_ts1 = (int) $req->input('jumlah_ps_akreditasi_ts1');
        $data->jumlah_ps_akreditasi_ts = (int) $req->input('jumlah_ps_akreditasi_ts');
        $data->jumlah_ps_akreditasi_average = (float) ($req->jumlah_ps_akreditasi_ts2 + $req->jumlah_ps_akreditasi_ts1 + $req->jumlah_ps_akreditasi_ts)/3;
        $data->jumlah_ps_lain_ts2 = (int) $req->input('jumlah_ps_lain_ts2');
        $data->jumlah_ps_lain_ts1 = (int) $req->input('jumlah_ps_lain_ts1');
        $data->jumlah_ps_lain_ts = (int) $req->input('jumlah_ps_lain_ts');
        $data->jumlah_ps_lain_average = (float) ($req->jumlah_ps_lain_ts2 + $req->jumlah_ps_lain_ts1 + $req->jumlah_ps_lain_ts)/3;;
        $data->average = (float) ($data->jumlah_ps_lain_average + $data->jumlah_ps_akreditasi_average)/2;
        $data->tahun_laporan = 2022;
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->save();

        return back()->with('success', 'Data berhasi ditambahkan.');
        
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function show(SdmDosenPembimbingTa $sdmDosenPembimbingTa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmDosenPembimbingTa $sdmDosenPembimbingTa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $connection = 'mysql';
        $rule = [
            'nama' => 'required',
            'jumlah_ps_akreditasi_ts2' => 'integer|required',
            'jumlah_ps_akreditasi_ts1' => 'integer|required',
            'jumlah_ps_akreditasi_ts' => 'integer|required',
            'jumlah_ps_lain_ts2' => 'integer|required',
            'jumlah_ps_lain_ts1' => 'integer|required',
            'jumlah_ps_lain_ts' => 'integer|required',
        ];
        $this->validate($req, $rule);

    try{
        $data = SdmDosenPembimbingTa::find($id);
        $data->nama = $req->input('nama');
        $data->jumlah_ps_akreditasi_ts2 = (int) $req->input('jumlah_ps_akreditasi_ts2');
        $data->jumlah_ps_akreditasi_ts1 = (int) $req->input('jumlah_ps_akreditasi_ts1');
        $data->jumlah_ps_akreditasi_ts = (int) $req->input('jumlah_ps_akreditasi_ts');
        $data->jumlah_ps_akreditasi_average = (float) ($req->jumlah_ps_akreditasi_ts2 + $req->jumlah_ps_akreditasi_ts1 + $req->jumlah_ps_akreditasi_ts)/3;
        $data->jumlah_ps_lain_ts2 = (int) $req->input('jumlah_ps_lain_ts2');
        $data->jumlah_ps_lain_ts1 = (int) $req->input('jumlah_ps_lain_ts1');
        $data->jumlah_ps_lain_ts = (int) $req->input('jumlah_ps_lain_ts');
        $data->jumlah_ps_lain_average = (float) ($req->jumlah_ps_lain_ts2 + $req->jumlah_ps_lain_ts1 + $req->jumlah_ps_lain_ts)/3;;
        $data->average = (float) ($data->jumlah_ps_lain_average + $data->jumlah_ps_akreditasi_average)/2;
        $data->tahun_laporan = 2022;
        $data->prodi = auth()->user()->prodi;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();

        return back()->with('success', 'Data berhasil diubah.');

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
     * @param  \App\Models\SdmDosenPembimbingTa  $sdmDosenPembimbingTa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmDosenPembimbingTa::find($id)->delete();
        return back()->with('success', 'Data berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new DosenPembimbingTAExport, 'dosen-pembimbing-ta.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new DosenPembimbingTAExport, 'dosen-pembimbing-ta.csv');
    }
}
