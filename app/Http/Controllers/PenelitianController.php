<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\PenelitianExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PenelitianDtpsMelibatkanMahasiswa;

class PenelitianController extends Controller
{
    public function index()
    {
        $penelitian = PenelitianDtpsMelibatkanMahasiswa::all();
        $jumlah_judul = PenelitianDtpsMelibatkanMahasiswa::select('judul')->count();
        return view('tab.penelitian', [
            'title' => 'Penelitian',
            'penelitian' => $penelitian,
            'jumlah_judul' => $jumlah_judul,
        ]);
    }

    public function store(Request $req)
    {
        $connection = 'mysql';
        $this->validate($req, [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
        ]);
        try{
        $penelitian = new PenelitianDtpsMelibatkanMahasiswa;
        $penelitian->nama_dosen = $req->input('nama_dosen');
        $penelitian->tema = $req->input('tema');
        $penelitian->nama_mahasiswa = $req->input('nama_mahasiswa');
        $penelitian->judul = $req->input('judul');
        $penelitian->tahun = $req->input('tahun');
        $penelitian->tahun_laporan = 2022;
        $penelitian->prodi = auth()->user()->prodi;
        $penelitian->created_by = auth()->user()->name;
        $penelitian->created_at = Carbon::now();
        $penelitian->save();

        return back()->with('success', 'Data Penelitian DTPS yang Melibatkan Mahasiswa berhasil ditambahkan.');
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    public function update(Request $req, $id)
    {
        $connection = 'mysql';
        $this->validate($req, [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
        ]);

        try{
        $penelitian = PenelitianDtpsMelibatkanMahasiswa::find($id);
        $penelitian->nama_dosen = $req->input('nama_dosen');
        $penelitian->tema = $req->input('tema');
        $penelitian->nama_mahasiswa = $req->input('nama_mahasiswa');
        $penelitian->judul = $req->input('judul');
        $penelitian->tahun = $req->input('tahun');
        $penelitian->tahun_laporan = 2022;
        $penelitian->prodi = auth()->user()->prodi;
        $penelitian->updated_by = auth()->user()->name;
        $penelitian->updated_at = Carbon::now();
        $penelitian->save();

        return back()->with('success', 'Data Penelitian DTPS yang Melibatkan Mahasiswa berhasil diubah.');
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    public function destroy($id)
    {
        PenelitianDtpsMelibatkanMahasiswa::find($id)->delete();

        return back()->with('success', 'Data Penelitian DTPS yang Melibatkan Mahasiswa berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new PenelitianExport, 'penelitian-dtps-melibatkan-mahasiswa.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new PenelitianExport, 'penelitian-dtps-melibatkan-mahasiswa.csv');
    }
}
