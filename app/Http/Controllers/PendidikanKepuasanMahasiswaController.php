<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PendidikanKepuasanMahasiswa;
use App\Exports\PendidikanKepuasanMahasiswaExport;

class PendidikanKepuasanMahasiswaController extends Controller
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
        $cek = PendidikanKepuasanMahasiswa::where($where)->exists();

        if(!$cek)
        {
            PendidikanKepuasanMahasiswa::create([
                'aspek_id' => 1,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi,
            ]);
            PendidikanKepuasanMahasiswa::create([
                'aspek_id' => 2,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi,
            ]);
            PendidikanKepuasanMahasiswa::create([
                'aspek_id' => 3,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi,
            ]);
            PendidikanKepuasanMahasiswa::create([
                'aspek_id' => 4,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi,
            ]);
            PendidikanKepuasanMahasiswa::create([
                'aspek_id' => 5,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi,
            ]);
            
        }
        
        $kepuasan = PendidikanKepuasanMahasiswa::with('aspek')->where($where)->get();
        $sangat_baik = PendidikanKepuasanMahasiswa::where($where)->sum('sangat_baik');
        $baik = PendidikanKepuasanMahasiswa::where($where)->sum('baik');
        $cukup = PendidikanKepuasanMahasiswa::where($where)->sum('cukup');
        $kurang = PendidikanKepuasanMahasiswa::where($where)->sum('kurang');

        $tkm1 = [
            'a1' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 1)->sum('sangat_baik'),
            'b1' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 1)->sum('baik'),
            'c1' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 1)->sum('cukup'),
            'd1' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 1)->sum('kurang')
        ];
        $tkm2 = [
            'a2' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 2)->sum('sangat_baik'),
            'b2' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 2)->sum('baik'),
            'c2' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 2)->sum('cukup'),
            'd2' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 2)->sum('kurang')
        ];
        $tkm3 = [
            'a3' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 3)->sum('sangat_baik'),
            'b3' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 3)->sum('baik'),
            'c3' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 3)->sum('cukup'),
            'd3' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 3)->sum('kurang')
        ];
        $tkm4 = [
            'a4' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 4)->sum('sangat_baik'),
            'b4' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 4)->sum('baik'),
            'c4' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 4)->sum('cukup'),
            'd4' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 4)->sum('kurang')
        ];
        $tkm5 = [
            'a5' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 5)->sum('sangat_baik'),
            'b5' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 5)->sum('baik'),
            'c5' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 5)->sum('cukup'),
            'd5' => PendidikanKepuasanMahasiswa::where($where)->where('aspek_id', 5)->sum('kurang')
        ];
        

        return [
            'kepuasan' => $kepuasan,
            'sangat_baik' => $sangat_baik,
            'baik' => $baik,
            'cukup' => $cukup,
            'kurang' => $kurang,
            'tkm1' => $tkm1,
            'tkm2' => $tkm2,
            'tkm3' => $tkm3,
            'tkm4' => $tkm4,
            'tkm5' => $tkm5,
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
            'aspek_id' => 'required',
        ]);

        try{
        $kepuasan = new PendidikanKepuasanMahasiswa;
        $kepuasan->aspek_id = $req->input('aspek_id');
        $kepuasan->sangat_baik = $req->input('sangat_baik');
        $kepuasan->baik = $req->input('baik');
        $kepuasan->cukup = $req->input('cukup');
        $kepuasan->kurang = $req->input('kurang');
        $kepuasan->rencana_tindak_lanjut = $req->input('rencana_tindak_lanjut');
        $kepuasan->tahun_laporan = $tahun;
        $kepuasan->prodi = auth()->user()->prodi->name;
        $kepuasan->created_by = auth()->user()->name;
        $kepuasan->created_at = Carbon::now();
        $kepuasan->save();
        // dd($kepuasan);
        return back()->with('success', 'Data Kepuasan Mahasiswa berhasil ditambahkan.');
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
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(PendidikanKepuasanMahasiswa $pendidikanKepuasanMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PendidikanKepuasanMahasiswa $pendidikanKepuasanMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'aspek_id' => 'required',
            'sangat_baik' => 'required',
            'baik' => 'required',
            'cukup' => 'required',
            'kurang' => 'required',
            'rencana_tindak_lanjut' => 'required',
        ]);
    try{
        $kepuasan = PendidikanKepuasanMahasiswa::find($id);
        $kepuasan->aspek_id = $req->input('aspek_id');
        $kepuasan->sangat_baik = $req->input('sangat_baik');
        $kepuasan->baik = $req->input('baik');
        $kepuasan->cukup = $req->input('cukup');
        $kepuasan->kurang = $req->input('kurang');
        $kepuasan->rencana_tindak_lanjut = $req->input('rencana_tindak_lanjut');
        $kepuasan->tahun_laporan = $tahun;
        $kepuasan->prodi = auth()->user()->prodi->name;
        $kepuasan->created_by = auth()->user()->name;
        $kepuasan->created_at = Carbon::now();
        $kepuasan->update();

        return back()->with('success', 'Data Kepuasan Mahasiswa berhasil ditambahkan.');
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
     * @param  \App\Models\PendidikanKepuasanMahasiswa  $pendidikanKepuasanMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, $id)
    {
        $tahun = session('tahun_laporan');
        $kepuasan = PendidikanKepuasanMahasiswa::find($id);
        $kepuasan->aspek_id = $req->input('aspek_id');
        $kepuasan->sangat_baik = null;
        $kepuasan->baik = null;
        $kepuasan->cukup = null;
        $kepuasan->kurang = null;
        $kepuasan->rencana_tindak_lanjut = null;
        $kepuasan->prodi = auth()->user()->prodi->name;
        $kepuasan->updated_by = auth()->user()->name;
        $kepuasan->updated_at = Carbon::now();
        $kepuasan->update();
        return back()->with('error', 'Data Kepuasan Mahasiswa berhasil dihapus.');
    }
    
    public function exportToExcel()
    {
        return Excel::download(new PendidikanKepuasanMahasiswaExport, 'pendidikan-kepuasan-mahasiswa.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new PendidikanKepuasanMahasiswaExport, 'pendidikan-kepuasan-mahasiswa.csv');
    }

    public function approve($id)
    {
        $data = PendidikanKepuasanMahasiswa::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Pendidikan Kepuasan Mahasiswa telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Pendidikan Kepuasan Mahasiswa berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = PendidikanKepuasanMahasiswa::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Pendidikan Kepuasan Mahasiswa berhasil ditolak.');
    }
}
