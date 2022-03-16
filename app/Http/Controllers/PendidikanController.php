<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Aspek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PendidikanKurikulum;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PendidikanKurikulumExport;
use App\Models\PendidikanKepuasanMahasiswa;
use App\Models\PendidikanIntegrasiKegiatanPenelitian;

class PendidikanController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];

        $kurikulum = (new PendidikanKurikulumController)->index();
        // ddd($kurikulum);
        $integrasi = (new PendidikanIntegrasiKegiatanPenelitianController)->index();
        $kepuasanmahasiswa = (new PendidikanKepuasanMahasiswaController)->index();
        $aspek = Aspek::where($where)->get();
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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'semester' => 'required',
            'kode_mata_kuliah' => 'required',
            'nama_mata_kuliah' => 'required',
            'mata_kuliah_kompetensial' => 'required',
            'bobot_kuliah' => 'required',
            'bobot_seminar' => 'required',
            'bobot_praktikum' => 'required',
            'capaian_sikap' => 'required',
            'capaian_pengetahuan' => 'required',
            'capaian_ketrampilan_umum' => 'required',
            'capaian_ketrampilan_khusus' => 'required',
            'document_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ]);

        try{
        $kurikulum = new PendidikanKurikulum;
        $kurikulum->semester = $req->input('semester');
        $kurikulum->kode_mata_kuliah = $req->input('kode_mata_kuliah');
        $kurikulum->nama_mata_kuliah = $req->input('nama_mata_kuliah');
        $kurikulum->mata_kuliah_kompetensial = $req->input('mata_kuliah_kompetensial');
        $kurikulum->bobot_kuliah = (int) $req->input('bobot_kuliah');
        $kurikulum->bobot_seminar = (int) $req->input('bobot_seminar');
        $kurikulum->bobot_praktikum = (int) $req->input('bobot_praktikum');
        $kurikulum->konversi_kredit_jam = (int) ($req->bobot_kuliah + $req->bobot_seminar + $req->bobot_praktikum) * 50/60;
        $kurikulum->capaian_sikap = $req->input('capaian_sikap');
        $kurikulum->capaian_pengetahuan = $req->input('capaian_pengetahuan');
        $kurikulum->capaian_ketrampilan_umum = $req->input('capaian_ketrampilan_umum');
        $kurikulum->capaian_ketrampilan_khusus = $req->input('capaian_ketrampilan_khusus');
        $kurikulum->document_rencana_pembelajaran = $req->input('document_rencana_pembelajaran');
        $kurikulum->unit_penyelenggara = $req->input('unit_penyelenggara');
        $kurikulum->tahun_laporan = $tahun;
        $kurikulum->prodi = auth()->user()->prodi->name;
        $kurikulum->created_by = auth()->user()->name;
        $kurikulum->created_at = Carbon::now();
        $kurikulum->save();

        return back()->with('success', 'Data Pendidikan Kurikulum berhasil ditambahkan.');
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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'semester' => 'required',
            'kode_mata_kuliah' => 'required',
            'nama_mata_kuliah' => 'required',
            'mata_kuliah_kompetensial' => 'required',
            'bobot_kuliah' => 'required',
            'bobot_seminar' => 'required',
            'bobot_praktikum' => 'required',
            'capaian_sikap' => 'required',
            'capaian_pengetahuan' => 'required',
            'capaian_ketrampilan_umum' => 'required',
            'capaian_ketrampilan_khusus' => 'required',
            'document_rencana_pembelajaran' => 'required',
            'unit_penyelenggara' => 'required',
        ]);

        try{
        $kurikulum = PendidikanKurikulum::find($id);
        $kurikulum->semester = $req->input('semester');
        $kurikulum->kode_mata_kuliah = $req->input('kode_mata_kuliah');
        $kurikulum->nama_mata_kuliah = $req->input('nama_mata_kuliah');
        $kurikulum->mata_kuliah_kompetensial = $req->input('mata_kuliah_kompetensial');
        $kurikulum->bobot_kuliah = (int) $req->input('bobot_kuliah');
        $kurikulum->bobot_seminar = (int) $req->input('bobot_seminar');
        $kurikulum->bobot_praktikum = (int) $req->input('bobot_praktikum');
        $kurikulum->konversi_kredit_jam = (int) ($req->bobot_kuliah + $req->bobot_seminar + $req->bobot_praktikum) * 50/60;
        $kurikulum->capaian_sikap = $req->input('capaian_sikap');
        $kurikulum->capaian_pengetahuan = $req->input('capaian_pengetahuan');
        $kurikulum->capaian_ketrampilan_umum = $req->input('capaian_ketrampilan_umum');
        $kurikulum->capaian_ketrampilan_khusus = $req->input('capaian_ketrampilan_khusus');
        $kurikulum->document_rencana_pembelajaran = $req->input('document_rencana_pembelajaran');
        $kurikulum->unit_penyelenggara = $req->input('unit_penyelenggara');
        $kurikulum->tahun_laporan = $tahun;
        $kurikulum->prodi = auth()->user()->prodi->name;
        $kurikulum->updated_by = auth()->user()->name;
        $kurikulum->updated_at = Carbon::now();
        $kurikulum->update();

        return back()->with('success', 'Data Pendidikan Kurikulum berhasil diubah.');
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
        PendidikanKurikulum::find($id)->delete();
        return back()->with('success', 'Data Pendidikan Kurikulum dihapus.');
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
