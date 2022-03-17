<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PkmDtps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengabdianController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];

        $pengabdian = PkmDtps::where($where)->get();
        // dd($pengabdian);
        $jumlah_judul = PkmDtps::select('judul_kegiatan')->where($where)->count();
        return view('tab.pkm', [
            'title' => 'Pkm',
            'pengabdian' => $pengabdian,
            'jumlah_judul' => $jumlah_judul,
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
}
