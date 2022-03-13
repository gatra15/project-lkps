<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Models\SdmKinerjaDosenPenelitianDtps;
use App\Exports\KinerjaDosenPenelitianDtpsExport;

class SdmKinerjaDosenPenelitianDtpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penelitian = SdmKinerjaDosenPenelitianDtps::with('sumber')->get();
        $jumlah_ts2 = SdmKinerjaDosenPenelitianDtps::sum('jumlah_ts2');
        $jumlah_ts1 = SdmKinerjaDosenPenelitianDtps::sum('jumlah_ts1');
        $jumlah_ts = SdmKinerjaDosenPenelitianDtps::sum('jumlah_ts');
        $jumlah = SdmKinerjaDosenPenelitianDtps::sum('jumlah');
        return [
            'penelitian' => $penelitian,
            'jumlah_ts2' => $jumlah_ts2,
            'jumlah_ts1' => $jumlah_ts1,
            'jumlah_ts' => $jumlah_ts,
            'jumlah' => $jumlah
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
        $this->validate($req, [
            'sumber_pembiayaan' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
            'jumlah' => 'required',
        ]);

        try {
        $pengakuan = new SdmKinerjaDosenPenelitianDtps;
        $pengakuan->sumber_pembiayaan = $req->input('sumber_id');
        $pengakuan->jumlah_ts2 = $req->input('jumlah_ts2');
        $pengakuan->jumlah_ts1 = $req->input('jumlah_ts1');
        $pengakuan->jumlah_ts = $req->input('jumlah_ts');
        $pengakuan->jumlah = $req->input('jumlah');
        $pengakuan->tahun_laporan = 2022;
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();
        dd($pengakuan);
        return back()->with('success', 'Data Penelitian Dtps berhasil ditambahkan.');
        
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
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenPenelitianDtps $sdmKinerjaDosenPenelitianDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenPenelitianDtps $sdmKinerjaDosenPenelitianDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $connection = 'mysql';
        $this->validate($req, [
            'sumber_id' => 'required',
            'jumlah_ts2' => 'required',
            'jumlah_ts1' => 'required',
            'jumlah_ts' => 'required',
        ]);
        

        try{
        $pengakuan = SdmKinerjaDosenPenelitianDtps::find($id);
        $pengakuan->sumber_id = $req->input('sumber_id');
        $pengakuan->jumlah_ts1 = (int) $req->input('jumlah_ts1');
        $pengakuan->jumlah_ts2 = (int) $req->input('jumlah_ts2');
        $pengakuan->jumlah_ts = (int) $req->input('jumlah_ts');
        $pengakuan->jumlah = $req->jumlah_ts + $req->jumlah_ts1 + $req->jumlah_ts2;
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();
        $pengakuan->update();
        // dd($pengakuan);

        return back()->with('success', 'Data Penelitian Dtps berhasil ditambahkan.');
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
     * @param  \App\Models\SdmKinerjaDosenPenelitianDtps  $sdmKinerjaDosenPenelitianDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req,$id)
    {
        $pengakuan = SdmKinerjaDosenPenelitianDtps::find($id);
        $pengakuan->sumber_id = $req->input('sumber_id');
        $pengakuan->jumlah_ts2 = null;
        $pengakuan->jumlah_ts1 = null;
        $pengakuan->jumlah_ts = null;
        $pengakuan->jumlah = null;
        $pengakuan->tahun_laporan = 2022;
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->updated_by = auth()->user()->name;
        $pengakuan->updated_at = Carbon::now();
        $pengakuan->update();
        return back()->with('success', 'Data Penelitian Dtps berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new KinerjaDosenPenelitianDtpsExport, 'kinerja-dosen-penelitian-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new KinerjaDosenPenelitianDtpsExport, 'kinerja-dosen-penelitian-dtps.csv');
    }
}
