<?php

namespace App\Http\Controllers;

use App\Exports\PkmExport;
use Carbon\Carbon;
use App\Models\PkmDtps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PengabdianController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun-1, 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun-2, 'prodi' => $prodi];

        $pengabdian = PkmDtps::where($where)->get();
        $pengabdian_asesor = PkmDtps::where($where)->where('is_approved',1)->get();
        // dd($pengabdian);
        $jumlah_judul = PkmDtps::select('judul_kegiatan')->where($where)->count();
        $jumlah_judul_asesor = PkmDtps::select('judul_kegiatan')->where($where)->where('is_approved',1)->count();
        $NPkm = PkmDtps::where($where)->orWhere($where1)->orWhere($where2)->count('judul_kegiatan');
        return view('tab.pkm', [
            'title' => 'Pkm',
            'pengabdian' => $pengabdian,
            'pengabdian_asesor' => $pengabdian_asesor,
            'jumlah_judul' => $jumlah_judul,
            'jumlah_judul_asesor' => $jumlah_judul_asesor,
            'npkm' => $NPkm,
        ]);
    }

    public function store(Request $req)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $rule = [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul_kegiatan' => 'required',
            'tahun' => 'required',
        ];

        $this->validate($req, $rule);

        try{
        $data = new PkmDtps;
        $data->nama_dosen = $req->input('nama_dosen');
        $data->tema = $req->input('tema');
        $data->nama_mahasiswa = $req->input('nama_mahasiswa');
        $data->judul_kegiatan = $req->input('judul_kegiatan');
        $data->tahun = $req->input('tahun');
        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->save();

        return back()->with('success', 'Data PkM yang Melibatkan Mahasiswa DTPS created.');
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
        $rule = [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul_kegiatan' => 'required',
            'tahun' => 'required',
        ];

        $this->validate($req, $rule);

        try{
        $data = PkmDtps::find($id);
        $data->nama_dosen = $req->input('nama_dosen');
        $data->tema = $req->input('tema');
        $data->nama_mahasiswa = $req->input('nama_mahasiswa');
        $data->judul_kegiatan = $req->input('judul_kegiatan');
        $data->tahun = $req->input('tahun');
        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();

        return back()->with('success', 'Data PkM yang Melibatkan Mahasiswa DTPS updated.');
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
        PkmDtps::find($id)->delete();
        return back()->with('error', 'Data PkM yang Melibatkan Mahasiswa DTPS deleted.');
    }

    public function exportToExcel()
    {
        return Excel::download(new PkmExport, 'pengabdian-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new PkmExport, 'pengabdian-dtps.csv');
    }

    public function approve($id)
    {
        $data = PkmDtps::find($id);
        $data->is_approved = true;
        $data->comment = 'Data PKM Dtps telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data PKM Dtps berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = PkmDtps::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data PKM Dtps berhasil ditolak.');
    }
}
