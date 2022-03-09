<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\PenelitianExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PenelitianDtpsMelibatkanMahasiswa;

class PenelitianController extends Controller
{
    public function index()
    {
        $penelitian = PenelitianDtpsMelibatkanMahasiswa::all();
        return view('tab.penelitian', [
            'title' => 'Penelitian',
            'penelitian' => $penelitian,
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
        ]);

        $penelitian = new PenelitianDtpsMelibatkanMahasiswa;
        $penelitian->nama_dosen = $req->input('nama_dosen');
        $penelitian->tema = $req->input('tema');
        $penelitian->nama_mahasiswa = $req->input('nama_mahasiswa');
        $penelitian->judul = $req->input('judul');
        $penelitian->tahun = $req->input('tahun');
        $penelitian->tahun_laporan = '2022';
        $penelitian->prodi = auth()->user()->prodi;
        $penelitian->created_by = auth()->user()->name;
        $penelitian->created_at = Carbon::now();
        $penelitian->save();

        return back()->with('success', 'Data Penelitian DTPS yang Melibatkan Mahasiswa has been created.');
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
        ]);

        $penelitian = PenelitianDtpsMelibatkanMahasiswa::find($id);
        $penelitian->nama_dosen = $req->input('nama_dosen');
        $penelitian->tema = $req->input('tema');
        $penelitian->nama_mahasiswa = $req->input('nama_mahasiswa');
        $penelitian->judul = $req->input('judul');
        $penelitian->tahun = $req->input('tahun');
        $penelitian->tahun_laporan = '2022';
        $penelitian->prodi = auth()->user()->prodi;
        $penelitian->created_by = auth()->user()->name;
        $penelitian->updated_at = Carbon::now();
        $penelitian->save();

        return back()->with('success', 'Data Penelitian DTPS yang Melibatkan Mahasiswa has been updated.');
    }

    public function destroy($id)
    {
        PenelitianDtpsMelibatkanMahasiswa::find($id)->delete();

        return back()->with('error', 'Data Penelitian DTPS yang Melibatkan Mahasiswa has been deleted.');
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
