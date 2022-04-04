<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tahun;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\MahasiswaAsing;
use App\Exports\MahasiswaExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class TabMahasiswaController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];

        $mahasiswa = (new MahasiswaController)->index();
        $mahasiswa_asing = (new MahasiswaAsingController)->index();
        $mahasiswaAsing = (new MahasiswaAsingController)->edit();
        $count = Mahasiswa::where($where)->count();

        
        return view('tab.mahasiswa', [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa,
            'mahasiswa_asing' => $mahasiswa_asing,
            'mahasiswaAsing' => $mahasiswaAsing,
            'count' => $count,
        ]);
    }

    public function store(Request $req)
    {
        $tahun = session('tahun_laporan');
        $this->validate($req, [
            
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->daya_tampung = $req->input('daya_tampung');
        $mahasiswa->c_pendaftar = $req->input('c_pendaftar');
        $mahasiswa->c_lulus_seleksi = $req->input('c_lulus_seleksi');
        $mahasiswa->mahasiswa_reguler = $req->input('mahasiswa_reguler');
        $mahasiswa->mahasiswa_transfer = $req->input('mahasiswa_transfer');
        $mahasiswa->mahasiswa_aktif_reguler = $req->input('mahasiswa_aktif_reguler');
        $mahasiswa->mahasiswa_aktif_transfer = $req->input('mahasiswa_aktif_transfer');
        $mahasiswa->prodi = auth()->user()->prodi->name;
        $mahasiswa->created_by = auth()->user()->name;
        $mahasiswa->created_at = Carbon::now();
        $mahasiswa->save();

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $req, $id)
    {
       
        $tahun = session('tahun_laporan');
        
        $connection = 'mysql';
        $this->validate($req, [
            'daya_tampung' => 'integer|required',
            'c_pendaftar' => 'integer|required',
            'c_lulus_seleksi' => 'integer|required',
            'mahasiswa_reguler' => 'integer|required',
            'mahasiswa_transfer' => 'integer|required',
            'mahasiswa_aktif_reguler' => 'integer|required',
            'mahasiswa_aktif_transfer' => 'integer|required',
        ]);
    try{
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->daya_tampung = (int) $req->input('daya_tampung');
        $mahasiswa->c_pendaftar = (int) $req->input('c_pendaftar');
        $mahasiswa->c_lulus_seleksi = (int) $req->input('c_lulus_seleksi');
        $mahasiswa->mahasiswa_reguler = (int) $req->input('mahasiswa_reguler');
        $mahasiswa->mahasiswa_transfer = (int) $req->input('mahasiswa_transfer');
        $mahasiswa->mahasiswa_aktif_reguler = (int) $req->input('mahasiswa_aktif_reguler');
        $mahasiswa->mahasiswa_aktif_transfer = (int) $req->input('mahasiswa_aktif_transfer');
        $mahasiswa->prodi = auth()->user()->prodi->name;
        $mahasiswa->created_by = auth()->user()->name;
        $mahasiswa->created_at = Carbon::now();
        // ddd($mahasiswa);
        $mahasiswa->update();   

        return back()->with('success', 'Data berhasi ditambahkan.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    public function destroy(Request $req, $id)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
    try{
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->daya_tampung = null;
        $mahasiswa->c_pendaftar = null;
        $mahasiswa->c_lulus_seleksi = null;
        $mahasiswa->mahasiswa_reguler = null;
        $mahasiswa->mahasiswa_transfer = null;
        $mahasiswa->mahasiswa_aktif_reguler = null;
        $mahasiswa->mahasiswa_aktif_transfer = null;
        $mahasiswa->prodi = auth()->user()->prodi->name;
        $mahasiswa->updated_by = auth()->user()->name;
        $mahasiswa->updated_at = Carbon::now();
        $mahasiswa->update();

        return back()->with('error', 'Data berhasil dihapus.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    public function exportToExcel()
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa.csv');
    }

    public function approve($id)
    {
        $data = Mahasiswa::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Mahasiswa telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }

    public function tolak(Request $req, $id)
    {
        $data = Mahasiswa::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }
}
