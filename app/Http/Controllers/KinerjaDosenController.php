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
use App\Http\Controllers\SdmKinerjaDosenPenelitianDtpsController;

class KinerjaDosenController extends Controller
{
    public function index()
    {
        $pengakuan = SdmKinerjaDosenPengakuanDtps::all();
        $luaran = SdmKinerjaDosenLuaranPkmDtps::all();
        $sumberdaya = Sumberdaya::all();
        $mediapublikasi = MediaPublikasi::all();

        // Agregation
        $countWilayah = SdmKinerjaDosenPengakuanDtps::where('tingkat', 'Wilayah')->count();
        $countNasional = SdmKinerjaDosenPengakuanDtps::where('tingkat', 'Nasional')->count();
        $countInternasional = SdmKinerjaDosenPengakuanDtps::where('tingkat', 'Internasional')->count();
        $sumPengakuan = $countWilayah + $countNasional + $countInternasional;

        // penelitian
        $penelitian = (new SdmKinerjaDosenPenelitianDtpsController)->index();
        // pkm
        $pkms = (new SdmKinerjaDosenPkmDtpsController)->index();
        // publikasi
        $publikasi = (new SdmKinerjaDosenPublikasiIlmiahDtpsController)->index();
        // karya ilmiah
        $karyailmiah = (new SdmKinerjaDosenKaryaIlmiahDtpsController)->index();


        return view('tab.kinerjadosentab.kinerjaDosen', [
            'title' => 'Kinerja Dosen',
            'pengakuan' => $pengakuan,
            'karyailmiah' => $karyailmiah,
            'penelitians' => $penelitian,
            'pkms' => $pkms,
            'publikasi' => $publikasi,
            'luaran' => $luaran,
            'sumberdaya' => $sumberdaya,
            'mediapublikasi' => $mediapublikasi,

            'countWilayah' => $countWilayah,
            'countNasional' => $countNasional,
            'countInternasional' => $countInternasional,
            'sumPengakuan' => $sumPengakuan
        ]);
    }

    public function store(Request $req)
    {
        $connection = 'mysql';
        $this->validate($req, [
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'bukti_pendukung' => 'required|max:2048',
            'tingkat' => 'required',
            'tahun' => 'required',
        ]);

        try {

        if($req->hasFile('bukti_pendukung')){
            $filenameWithExt    = $req->file('bukti_pendukung')->getClientOriginalName();
            $fileName           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $ext                = $req->file('bukti_pendukung')->getClientOriginalExtension();
            $fileSave           = $fileName.'_'.time().'.'.$ext;
            $path               = $req->file('bukti_pendukung')->storeAs('public/bukti_pendukung', $fileSave);
        }else{
            $fileSave           = 'Tidak ada file yang ditambahkan';
        }
        
        $pengakuan = new SdmKinerjaDosenPengakuanDtps;
        $pengakuan->nama = $req->input('nama');
        $pengakuan->bidang_keahlian = $req->input('bidang_keahlian');
        $pengakuan->bukti_pendukung = $fileSave;
        $pengakuan->tingkat = $req->input('tingkat');
        $pengakuan->tahun = $req->input('tahun');
        $pengakuan->tahun_laporan = '2022';
        $pengakuan->prodi = auth()->user()->prodi;
        $pengakuan->created_by = auth()->user()->name;
        $pengakuan->created_at = Carbon::now();
        $pengakuan->save();

        return back()->with('success', 'Sdm Kinerja Dosen Pengakuan Dtps has been created.');
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
        $this->validate($req, [
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'bukti_pendukung' => 'nullable|max:2048',
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
