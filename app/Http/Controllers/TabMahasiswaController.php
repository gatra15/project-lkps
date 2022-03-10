<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tahun;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\MahasiswaAsing;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class TabMahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with('tahun')->get();
        $mahasiswa_asing = MahasiswaAsing::all();
        $count = Mahasiswa::count();
        $mahasiswa = Mahasiswa::paginate(5);
        
        return view('tab.mahasiswa', [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa,
            'mahasiswa_asing' => $mahasiswa_asing,
            'count' => $count,
        ]);
    }

    public function store(Request $req)
    {
        
        $this->validate($req, [
            'tahun_id' => 'required',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->tahun_id = $req->input('tahun_id');
        $mahasiswa->daya_tampung = $req->input('daya_tampung');
        $mahasiswa->c_pendaftar = $req->input('c_pendaftar');
        $mahasiswa->c_lulus_seleksi = $req->input('c_lulus_seleksi');
        $mahasiswa->mahasiswa_reguler = $req->input('mahasiswa_reguler');
        $mahasiswa->mahasiswa_transfer = $req->input('mahasiswa_transfer');
        $mahasiswa->mahasiswa_aktif_reguler = $req->input('mahasiswa_aktif_reguler');
        $mahasiswa->mahasiswa_aktif_transfer = $req->input('mahasiswa_aktif_transfer');
        $mahasiswa->tahun_laporan = '2022';
        $mahasiswa->prodi = auth()->user()->prodi;
        $mahasiswa->created_by = auth()->user()->name;
        $mahasiswa->created_at = Carbon::now();
        $mahasiswa->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'tahun_id' => 'required',
            'daya_tampung' => 'required',
            'c_pendaftar' => 'required',
            'c_lulus_seleksi' => 'required',
            'mahasiswa_reguler' => 'required',
            'mahasiswa_transfer' => 'required',
            'mahasiswa_aktif_reguler' => 'required',
            'mahasiswa_aktif_transfer' => 'required',
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->tahun_id = $req->input('tahun_id');
        $mahasiswa->daya_tampung = $req->input('daya_tampung');
        $mahasiswa->c_pendaftar = $req->input('c_pendaftar');
        $mahasiswa->c_lulus_seleksi = $req->input('c_lulus_seleksi');
        $mahasiswa->mahasiswa_reguler = $req->input('mahasiswa_reguler');
        $mahasiswa->mahasiswa_transfer = $req->input('mahasiswa_transfer');
        $mahasiswa->mahasiswa_aktif_reguler = $req->input('mahasiswa_aktif_reguler');
        $mahasiswa->mahasiswa_aktif_transfer = $req->input('mahasiswa_aktif_transfer');
        $mahasiswa->tahun_laporan = '2022';
        $mahasiswa->prodi = auth()->user()->prodi;
        $mahasiswa->created_by = auth()->user()->name;
        $mahasiswa->updated_at = Carbon::now();
        $mahasiswa->update();

        return back()->with('success', 'Data berhasi diedit.');
    }

    public function destroy(Request $req, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->tahun_id = $req->input('tahun_id');
        $mahasiswa->daya_tampung = null;
        $mahasiswa->c_pendaftar = null;
        $mahasiswa->c_lulus_seleksi = null;
        $mahasiswa->mahasiswa_reguler = null;
        $mahasiswa->mahasiswa_transfer = null;
        $mahasiswa->mahasiswa_aktif_reguler = null;
        $mahasiswa->mahasiswa_aktif_transfer = null;
        $mahasiswa->updated_at = Carbon::now();
        $mahasiswa->update();

        return back()->with('error', 'Data berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa.csv');
    }
}
