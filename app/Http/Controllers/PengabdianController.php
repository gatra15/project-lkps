<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PkmDtps;
use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index()
    {
        $pengabdian = PkmDtps::all();
        return view('tab.pkm', [
            'title' => 'Pkm',
            'pengabdian' => $pengabdian
        ]);
    }

    public function store(Request $req)
    {
        $rule = [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul_kegiatan' => 'required',
            'tahun' => 'required',
        ];

        $this->validate($req, $rule);

        $data = new PkmDtps;
        $data->nama_dosen = $req->input('nama_dosen');
        $data->tema = $req->input('tema');
        $data->nama_mahasiswa = $req->input('nama_mahasiswa');
        $data->judul_kegiatan = $req->input('judul_kegiatan');
        $data->tahun = $req->input('tahun');
        $data->tahun_laporan = 2021;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->save();

        return back()->with('success', 'Data PkM yang Melibatkan Mahasiswa DTPS created.');
    }

    public function update(Request $req, $id)
    {
        $rule = [
            'nama_dosen' => 'required',
            'tema' => 'required',
            'nama_mahasiswa' => 'required',
            'judul_kegiatan' => 'required',
            'tahun' => 'required',
        ];

        $this->validate($req, $rule);

        $data = PkmDtps::find($id);
        $data->nama_dosen = $req->input('nama_dosen');
        $data->tema = $req->input('tema');
        $data->nama_mahasiswa = $req->input('nama_mahasiswa');
        $data->judul_kegiatan = $req->input('judul_kegiatan');
        $data->tahun = $req->input('tahun');
        $data->tahun_laporan = 2021;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();

        return back()->with('success', 'Data PkM yang Melibatkan Mahasiswa DTPS updated.');
    }

    public function destroy($id)
    {
        PkmDtps::find($id)->delete();
        return back()->with('error', 'Data PkM yang Melibatkan Mahasiswa DTPS deleted.');
    }
}
