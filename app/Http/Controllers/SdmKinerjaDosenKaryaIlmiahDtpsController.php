<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KaryaIlmiahDtpsExport;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;

class SdmKinerjaDosenKaryaIlmiahDtpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // filter
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];

        $karyailmiah = SdmKinerjaDosenKaryaIlmiahDtps::where($where)->get();
        $karyailmiah_asesor = SdmKinerjaDosenKaryaIlmiahDtps::where($where)->where('is_approved',1)->get();
        $jumlah = SdmKinerjaDosenKaryaIlmiahDtps::where($where)->sum('jumlah_sitasi');
        $count = SdmKinerjaDosenKaryaIlmiahDtps::where($where)->count('judul');
        $jumlah_asesor = SdmKinerjaDosenKaryaIlmiahDtps::where($where)->where('is_approved',1)->sum('jumlah_sitasi');
        $count_asesor = SdmKinerjaDosenKaryaIlmiahDtps::where($where)->where('is_approved',1)->count('judul');
        return [
            'karyailmiah' => $karyailmiah,
            'karyailmiah_asesor' => $karyailmiah_asesor,
            'jumlah' => $jumlah,
            'count' => $count,
            'jumlah_asesor' => $jumlah_asesor,
            'count_asesor' => $count_asesor,
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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'nama_dosen' => 'required',
            'judul' => 'required',
            'jumlah_sitasi' => 'required',

        ]);

    try{
        $karil = new SdmKinerjaDosenKaryaIlmiahDtps;
        $karil->nama_dosen = $req->input('nama_dosen');
        $karil->judul = $req->input('judul');
        $karil->jumlah_sitasi = $req->input('jumlah_sitasi');
        $karil->tahun_laporan = $tahun;
        $karil->prodi = auth()->user()->prodi->name;
        $karil->created_by = auth()->user()->name;
        $karil->created_at = Carbon::now();
        $karil->save();

        return back()->with('success', 'Sdm Kinerja Dosen Karya Ilmiah Dtps has been created.');
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
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenKaryaIlmiahDtps $sdmKinerjaDosenKaryaIlmiahDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenKaryaIlmiahDtps $sdmKinerjaDosenKaryaIlmiahDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'nama_dosen' => 'required',
            'judul' => 'required',
            'jumlah_sitasi' => 'required',

        ]);

    try{
        $karil = SdmKinerjaDosenKaryaIlmiahDtps::find($id);
        $karil->nama_dosen = $req->input('nama_dosen');
        $karil->judul = $req->input('judul');
        $karil->jumlah_sitasi = $req->input('jumlah_sitasi');
        $karil->tahun_laporan = $tahun;
        $karil->prodi = auth()->user()->prodi->name;
        $karil->created_by = auth()->user()->name;
        $karil->created_at = Carbon::now();
        $karil->update();

        return back()->with('success', 'Sdm Kinerja Dosen Karya Ilmiah Dtps has been updated.');
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
     * @param  \App\Models\SdmKinerjaDosenKaryaIlmiahDtps  $sdmKinerjaDosenKaryaIlmiahDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmKinerjaDosenKaryaIlmiahDtps::find($id)->delete();
        return back()->with('error', 'Sdm Kinerja Dosen Karya Ilmiah Dtps has been deleted.');
    }

    public function exportToExcel()
    {
        return Excel::download(new KaryaIlmiahDtpsExport, 'karya-ilmiah-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new KaryaIlmiahDtpsExport, 'karya-ilmiah-dtps.csv');
    }

    public function approve($id)
    {
        $data = SdmKinerjaDosenKaryaIlmiahDtps::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Kinerja Dosen Karya Ilmiah Dtps telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Kinerja Dosen Karya Ilmiah Dtps berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = SdmKinerjaDosenKaryaIlmiahDtps::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Kinerja Dosen Karya Ilmiah Dtps berhasil ditolak.');
    }
}
