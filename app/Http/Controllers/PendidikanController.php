<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PendidikanKurikulum;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PendidikanKurikulumExport;
use App\Models\Aspek;
use App\Models\PendidikanKepuasanMahasiswa;
use App\Models\PendidikanIntegrasiKegiatanPenelitian;

class PendidikanController extends Controller
{
    public function index()
    {
        $kurikulum = PendidikanKurikulum::all();
        $integrasi = PendidikanIntegrasiKegiatanPenelitian::all();
        $kepuasanmahasiswa = PendidikanKepuasanMahasiswa::with('aspek')->get();
        $aspek = Aspek::all();
        return view('tab.pendidikan', [
            'title' => 'Pendidikan',
            'kurikulum' => $kurikulum,
            'integrasi' => $integrasi,
            'kepuasanmahasiswa' => $kepuasanmahasiswa,
            'aspek' => $aspek,
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'semester' => 'required',
            'kode_mata_kuliah' => 'required',
            'nama_mata_kuliah' => 'required',
            'mata_kuliah_kompetensial' => 'required',
            'bobot_kuliah' => 'required',
            'bobot_seminar' => 'required',
            'bobot_praktikum' => 'required',
            'konversi_kredit_jam' => 'required',
            'capaian_sikap' => 'required',
            'capaian_pengetahuan' => 'required',
            'capaian_ketrampilan_umum' => 'required',
            'capaian_ketrampilan_khusus' => 'required',
            'document_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ]);

        $kurikulum = new PendidikanKurikulum;
        $kurikulum->semester = $req->input('semester');
        $kurikulum->kode_mata_kuliah = $req->input('kode_mata_kuliah');
        $kurikulum->nama_mata_kuliah = $req->input('nama_mata_kuliah');
        $kurikulum->mata_kuliah_kompetensial = $req->input('mata_kuliah_kompetensial');
        $kurikulum->bobot_kuliah = $req->input('bobot_kuliah');
        $kurikulum->bobot_seminar = $req->input('bobot_seminar');
        $kurikulum->bobot_praktikum = $req->input('bobot_praktikum');
        $kurikulum->konversi_kredit_jam = $req->input('konversi_kredit_jam');
        $kurikulum->capaian_sikap = $req->input('capaian_sikap');
        $kurikulum->capaian_pengetahuan = $req->input('capaian_pengetahuan');
        $kurikulum->capaian_ketrampilan_umum = $req->input('capaian_ketrampilan_umum');
        $kurikulum->capaian_ketrampilan_khusus = $req->input('capaian_ketrampilan_khusus');
        $kurikulum->document_rencana_pembelajaran = $req->input('document_rencana_pembelajaran');
        $kurikulum->unit_penyelenggara = $req->input('unit_penyelenggara');
        $kurikulum->tahun_laporan = '2022';
        $kurikulum->prodi = auth()->user()->prodi;
        $kurikulum->created_by = auth()->user()->name;
        $kurikulum->created_at = Carbon::now();
        $kurikulum->save();

        return back()->with('success', 'Pendidikan Kurikulum has been created.');
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'semester' => 'required',
            'kode_mata_kuliah' => 'required',
            'nama_mata_kuliah' => 'required',
            'mata_kuliah_kompetensial' => 'required',
            'bobot_kuliah' => 'required',
            'bobot_seminar' => 'required',
            'bobot_praktikum' => 'required',
            'konversi_kredit_jam' => 'required',
            'capaian_sikap' => 'required',
            'capaian_pengetahuan' => 'required',
            'capaian_ketrampilan_umum' => 'required',
            'capaian_ketrampilan_khusus' => 'required',
            'document_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ]);

        $kurikulum = PendidikanKurikulum::find($id);
        $kurikulum->semester = $req->input('semester');
        $kurikulum->kode_mata_kuliah = $req->input('kode_mata_kuliah');
        $kurikulum->nama_mata_kuliah = $req->input('nama_mata_kuliah');
        $kurikulum->mata_kuliah_kompetensial = $req->input('mata_kuliah_kompetensial');
        $kurikulum->bobot_kuliah = $req->input('bobot_kuliah');
        $kurikulum->bobot_seminar = $req->input('bobot_seminar');
        $kurikulum->bobot_praktikum = $req->input('bobot_praktikum');
        $kurikulum->konversi_kredit_jam = $req->input('konversi_kredit_jam');
        $kurikulum->capaian_sikap = $req->input('capaian_sikap');
        $kurikulum->capaian_pengetahuan = $req->input('capaian_pengetahuan');
        $kurikulum->capaian_ketrampilan_umum = $req->input('capaian_ketrampilan_umum');
        $kurikulum->capaian_ketrampilan_khusus = $req->input('capaian_ketrampilan_khusus');
        $kurikulum->document_rencana_pembelajaran = $req->input('document_rencana_pembelajaran');
        $kurikulum->unit_penyelenggara = $req->input('unit_penyelenggara');
        $kurikulum->tahun_laporan = '2022';
        $kurikulum->prodi = auth()->user()->prodi;
        $kurikulum->created_by = auth()->user()->name;
        $kurikulum->updated_at = Carbon::now();
        $kurikulum->update();

        return back()->with('success', 'Pendidikan Kurikulum has been updated.');
    }

    public function destroy($id)
    {
        PendidikanKurikulum::find($id)->delete();
        return back()->with('error', 'Pendidikan Kurikulum has been deleted.');
    }

    public function exportToExcel()
    {
        return Excel::download(new PendidikanKurikulumExport, 'pendidikan-kurikulum.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new PendidikanKurikulumExport, 'pendidikan-kurikulum.csv');
    }
}
