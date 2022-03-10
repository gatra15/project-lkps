<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
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
        return view('tab.profildosentab.dosenpembimbingta', ['dosen' => $dosenta]);
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
        $rule = [
            'nama' => 'required',
            'jumlah_ps_akreditasi_ts2' => 'required',
            'jumlah_ps_akreditasi_ts1' => 'required',
            'jumlah_ps_akreditasi_ts' => 'required',
            'jumlah_ps_akreditasi_average' => 'required',
            'jumlah_ps_lain_ts2' => 'required',
            'jumlah_ps_lain_ts1' => 'required',
            'jumlah_ps_lain_ts' => 'required',
            'jumlah_ps_lain_average' => 'required',
            'average' => 'required',
        ];
        $this->validate($req, $rule);

        $data = new SdmDosenPembimbingTa;
        $data->nama = $req->input('nama');
        $data->jumlah_ps_akreditasi_ts2 = $req->input('jumlah_ps_akreditasi_ts2');
        $data->jumlah_ps_akreditasi_ts1 = $req->input('jumlah_ps_akreditasi_ts1');
        $data->jumlah_ps_akreditasi_ts = $req->input('jumlah_ps_akreditasi_ts');
        $data->jumlah_ps_akreditasi_average = $req->input('jumlah_ps_akreditasi_average');
        $data->jumlah_ps_lain_ts2 = $req->input('jumlah_ps_lain_ts2');
        $data->jumlah_ps_lain_ts1 = $req->input('jumlah_ps_lain_ts1');
        $data->jumlah_ps_lain_ts = $req->input('jumlah_ps_lain_ts');
        $data->jumlah_ps_lain_average = $req->input('jumlah_ps_lain_average');
        $data->average = $req->input('average');
        $data->tahun_laporan = '2022';
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->save();

        return back()->with('success', 'Dosen Pembimbing Utama TA has been created.');
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
        $rule = [
            'nama' => 'required',
            'jumlah_ps_akreditasi_ts2' => 'required',
            'jumlah_ps_akreditasi_ts1' => 'required',
            'jumlah_ps_akreditasi_ts' => 'required',
            'jumlah_ps_akreditasi_average' => 'required',
            'jumlah_ps_lain_ts2' => 'required',
            'jumlah_ps_lain_ts1' => 'required',
            'jumlah_ps_lain_ts' => 'required',
            'jumlah_ps_lain_average' => 'required',
            'average' => 'required',
        ];
        $this->validate($req, $rule);

        $data = SdmDosenPembimbingTa::find($id);
        $data->nama = $req->input('nama');
        $data->jumlah_ps_akreditasi_ts2 = $req->input('jumlah_ps_akreditasi_ts2');
        $data->jumlah_ps_akreditasi_ts1 = $req->input('jumlah_ps_akreditasi_ts1');
        $data->jumlah_ps_akreditasi_ts = $req->input('jumlah_ps_akreditasi_ts');
        $data->jumlah_ps_akreditasi_average = $req->input('jumlah_ps_akreditasi_average');
        $data->jumlah_ps_lain_ts2 = $req->input('jumlah_ps_lain_ts2');
        $data->jumlah_ps_lain_ts1 = $req->input('jumlah_ps_lain_ts1');
        $data->jumlah_ps_lain_ts = $req->input('jumlah_ps_lain_ts');
        $data->jumlah_ps_lain_average = $req->input('jumlah_ps_lain_average');
        $data->average = $req->input('average');
        $data->tahun_laporan = '2022';
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->save();

        return back()->with('success', 'Dosen Pembimbing Utama TA has been updated.');
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
        return back()->with('success', 'Dosen Pembimbing Utama TA has been deleted.');
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
