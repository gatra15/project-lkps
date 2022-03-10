<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KinerjaDosenPublikasiExport;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Models\SdmKinerjaDosenPublikasiIlmiahDtps;

class SdmKinerjaDosenPublikasiIlmiahDtpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($req, [
            'media_publikasi' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
            'jumlah' => 'required',
        ]);

        $pengakuan = new SdmKinerjaDosenPublikasiIlmiahDtps;
        $pengakuan->media_publikasi = $req->input('media_publikasi');
        $pengakuan->jumlah_ts2 = $req->input('jumlah_ts2');
        $pengakuan->jumlah_ts1 = $req->input('jumlah_ts1');
        $pengakuan->jumlah_ts = $req->input('jumlah_ts');
        $pengakuan->jumlah = $req->input('jumlah');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Publikasi Ilmiah Dtps has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenPublikasiIlmiahDtps $sdmKinerjaDosenPublikasiIlmiahDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenPublikasiIlmiahDtps $sdmKinerjaDosenPublikasiIlmiahDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'media_id' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
            'jumlah' => 'required',
        ]);

        $data = SdmKinerjaDosenPublikasiIlmiahDtps::find($id);
        $data->media_id = $req->input('media_id');
        $data->jumlah_ts2 = $req->input('jumlah_ts2');
        $data->jumlah_ts1 = $req->input('jumlah_ts1');
        $data->jumlah_ts = $req->input('jumlah_ts');
        $data->jumlah = $req->input('jumlah');
        $data->tahun_laporan = '2022';
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();
        return back()->with('success', 'Sdm Kinerja Dosen Publikasi Ilmiah Dtps has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmKinerjaDosenPublikasiIlmiahDtps  $sdmKinerjaDosenPublikasiIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $data = SdmKinerjaDosenPublikasiIlmiahDtps::find($id);
        $data->media_id = $req->input('media_id');
        $data->jumlah_ts2 = null;
        $data->jumlah_ts1 = null;
        $data->jumlah_ts = null;
        $data->jumlah = null;
        $data->tahun_laporan = '2022';
        $data->update();
        return back()->with('error', 'Sdm Kinerja Dosen Publikasi Ilmiah Dtps has been deleted.');
    }

    public function exportToExcel()
    {
        return Excel::download(new KinerjaDosenPublikasiExport, 'kinerja-dosen-publikasi-ilmiah-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new KinerjaDosenPublikasiExport, 'kinerja-dosen-publikasi-ilmiah-dtps.csv');
    }
}
