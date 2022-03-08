<?php

namespace App\Http\Controllers;

use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Models\SdmKinerjaDosenLuaranPkmDtps;
use App\Models\SdmKinerjaDosenPenelitianDtps;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmKinerjaDosenPengakuanDtps;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Models\SdmKinerjaDosenPublikasiIlmiahDtps;
use PhpParser\Node\Expr\FuncCall;

class KinerjaDosenController extends Controller
{
    public function index()
    {
        $pengakuan = SdmKinerjaDosenPengakuanDtps::all();
        $karyailmiah = SdmKinerjaDosenKaryaIlmiahDtps::all();
        $penelitian = SdmKinerjaDosenPenelitianDtps::all();
        $pkm = SdmKinerjaDosenPkmDtps::all();
        $publikasi = SdmKinerjaDosenPublikasiIlmiahDtps::all();
        $luaran = SdmKinerjaDosenLuaranPkmDtps::all();

        return view('tab.kinerjadosentab.kinerjaDosen', [
            'title' => 'Kinerja Dosen',
            'pengakuan' => $pengakuan,
            'karyailmiah' => $karyailmiah,
            'penelitian' => $penelitian,
            'pkm' => $pkm,
            'publikasi' => $publikasi,
            'luaran' => $luaran,
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'bukti_pendukung' => 'required',
            'wilayah' => 'required',
            'nasional' => 'required',
            'internasional' => 'required',
            'tahun' => 'required',
        ]);

        $pengakuan = new SdmKinerjaDosenPengakuanDtps;
        $pengakuan->nama = $req->input('nama');
        $pengakuan->bidang_keahlian = $req->input('bidang_keahlian');
        $pengakuan->bukti_pendukung = $req->input('bukti_pendukung');
        $pengakuan->wilayah = $req->input('wilayah');
        $pengakuan->nasional = $req->input('nasional');
        $pengakuan->internasional = $req->input('internasional');
        $pengakuan->tahun = $req->input('tahun');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Pengakuan Dtps has been created.');
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'bukti_pendukung' => 'required',
            'wilayah' => 'required',
            'nasional' => 'required',
            'internasional' => 'required',
            'tahun' => 'required',
        ]);

        $pengakuan = SdmKinerjaDosenPengakuanDtps::find($id);
        $pengakuan->nama = $req->input('nama');
        $pengakuan->bidang_keahlian = $req->input('bidang_keahlian');
        $pengakuan->bukti_pendukung = $req->input('bukti_pendukung');
        $pengakuan->wilayah = $req->input('wilayah');
        $pengakuan->nasional = $req->input('nasional');
        $pengakuan->internasional = $req->input('internasional');
        $pengakuan->tahun = $req->input('tahun');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->updated_at = Carbon::now();

        return back()->with('success', 'Sdm Kinerja Dosen Pengakuan Dtps has been updated.');
    }

    public function destroy($id)
    {
        SdmKinerjaDosenPengakuanDtps::find($id)->delete();
        return back()->with('error', 'Sdm Kinerja Dosen Pengakuan Dtps has been deleted.');
    }
}
