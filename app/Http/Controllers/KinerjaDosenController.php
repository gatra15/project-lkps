<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sumberdaya;
use Illuminate\Http\Request;
use App\Models\MediaPublikasi;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use App\Exports\PengakuanDtpsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Models\SdmKinerjaDosenLuaranPkmDtps;
use App\Models\SdmKinerjaDosenPengakuanDtps;
use App\Models\SdmKinerjaDosenPenelitianDtps;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Models\SdmKinerjaDosenPublikasiIlmiahDtps;

class KinerjaDosenController extends Controller
{
    public function index()
    {
        $pengakuan = SdmKinerjaDosenPengakuanDtps::all();
        $karyailmiah = SdmKinerjaDosenKaryaIlmiahDtps::all();
        $penelitians = SdmKinerjaDosenPenelitianDtps::with('sumber')->get();
        $pkm = SdmKinerjaDosenPkmDtps::with('sumber_detail')->get();
        $publikasi = SdmKinerjaDosenPublikasiIlmiahDtps::all();
        $luaran = SdmKinerjaDosenLuaranPkmDtps::all();
        $sumberdaya = Sumberdaya::all();
        $mediapublikasi = MediaPublikasi::all();

        return view('tab.kinerjadosentab.kinerjaDosen', [
            'title' => 'Kinerja Dosen',
            'pengakuan' => $pengakuan,
            'karyailmiah' => $karyailmiah,
            'penelitians' => $penelitians,
            'pkm' => $pkm,
            'publikasi' => $publikasi,
            'luaran' => $luaran,
            'sumberdaya' => $sumberdaya,
            'mediapublikasi' => $mediapublikasi,
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'bukti_pendukung' => 'required',
            'tingkat' => 'required',
            'tahun' => 'required',
        ]);
        $pengakuan = new SdmKinerjaDosenPengakuanDtps;
        $pengakuan->nama = $req->input('nama');
        $pengakuan->bidang_keahlian = $req->input('bidang_keahlian');
        $pengakuan->bukti_pendukung = $req->input('bukti_pendukung');
        $pengakuan->tingkat = $req->input('tingkat');
        $pengakuan->tahun = $req->input('tahun');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();
        $pengakuan->save();
        return back()->with('success', 'Sdm Kinerja Dosen Pengakuan Dtps has been created.');
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'bukti_pendukung' => 'required',
            'tingkat' => 'required',
            'tahun' => 'required',
        ]);

        $pengakuan = SdmKinerjaDosenPengakuanDtps::find($id);
        $pengakuan->nama = $req->input('nama');
        $pengakuan->bidang_keahlian = $req->input('bidang_keahlian');
        $pengakuan->bukti_pendukung = $req->input('bukti_pendukung');
        $pengakuan->tingkat = $req->input('tingkat');
        $pengakuan->tahun = $req->input('tahun');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->updated_at = Carbon::now();
        $pengakuan->update();

        return back()->with('success', 'Sdm Kinerja Dosen Pengakuan Dtps has been updated.');
    }

    public function destroy($id)
    {
        SdmKinerjaDosenPengakuanDtps::find($id)->delete();
        return back()->with('error', 'Sdm Kinerja Dosen Pengakuan Dtps has been deleted.');
    }

    public function exportToExcel()
    {
        return Excel::download(new PengakuanDtpsExport, 'pengakuan-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new PengakuanDtpsExport, 'pengakuan-dtps.csv');
    }
}
