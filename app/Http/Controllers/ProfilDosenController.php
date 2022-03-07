<?php

namespace App\Http\Controllers;

use App\Models\SdmDosen;
use App\Models\SdmDosenTidakTetap;
use App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfilDosenController extends Controller
{
    public function index()
    {
        $dosen = SdmDosen::all();
        $dosentidaktetap = SdmDosenTidakTetap::all();
        $dosenewmp = SdmEkuivalenWaktuMengajarPenuhDosenTetap::all();
        return view('tab.profildosentab.profilDosen', [
            'title' => 'Profil Dosen',
            'dosen' => $dosen,
            'dosentidaktetap' => $dosentidaktetap,
            'dosenewmp' => $dosenewmp,
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'nama_dosen' => 'required',
            'nidn_nidk' => 'required',
            'pendidikan_pasca_sarjana_magister' => 'required',
            'pendidikan_pasca_sarjana_doktor' => 'required',
            'bidang_keahlian' => 'required',
            'kesesuaian_ps' => 'required',
            'jabatan_akademik' => 'required',
            'sertifikat_pendidik_profesi' => 'required',
            'sertifikat_kompetensi' => 'required',
            'mata_kuliah_akreditasi_diampu' => 'required',
            'kesesuaian_mata_kuliah_diampu' => 'required',
            'mata_kuliah_diampu_ps_lain' => 'required',
        ]);

        $dosen = new SdmDosen;
        $dosen->nama_dosen = $req->input('nama_dosen');
        $dosen->nidn_nidk = $req->input('nidn_nidk');
        $dosen->pendidikan_pasca_sarjana_magister = $req->input('pendidikan_pasca_sarjana_magister');
        $dosen->pendidikan_pasca_sarjana_doktor = $req->input('pendidikan_pasca_sarjana_doktor');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->kesesuaian_ps = $req->input('kesesuaian_ps');
        $dosen->jabatan_akademik = $req->input('jabatan_akademik');
        $dosen->sertifikat_pendidik_profesi = $req->input('sertifikat_pendidik_profesi');
        $dosen->sertifikat_kompetensi = $req->input('sertifikat_kompetensi');
        $dosen->mata_kuliah_akreditasi_diampu = $req->input('mata_kuliah_akreditasi_diampu');
        $dosen->kesesuaian_mata_kuliah_diampu = $req->input('kesesuaian_mata_kuliah_diampu');
        $dosen->mata_kuliah_diampu_ps_lain = $req->input('mata_kuliah_diampu_ps_lain');
        $dosen->slug = 'dosen-tetap';
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return redirect('/profil-dosen')->with('success', 'New Dosen Tetap has been created.');
    }

    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama_dosen' => 'required',
            'nidn_nidk' => 'required',
            'pendidikan_pasca_sarjana_magister' => 'required',
            'pendidikan_pasca_sarjana_doktor' => 'required',
            'bidang_keahlian' => 'required',
            'kesesuaian_ps' => 'required',
            'jabatan_akademik' => 'required',
            'sertifikat_pendidik_profesi' => 'required',
            'sertifikat_kompetensi' => 'required',
            'mata_kuliah_akreditasi_diampu' => 'required',
            'kesesuaian_mata_kuliah_diampu' => 'required',
            'mata_kuliah_diampu_ps_lain' => 'required',
        ]);

        $dosen = SdmDosen::find($id);
        $dosen->nama_dosen = $req->input('nama_dosen');
        $dosen->nidn_nidk = $req->input('nidn_nidk');
        $dosen->pendidikan_pasca_sarjana_magister = $req->input('pendidikan_pasca_sarjana_magister');
        $dosen->pendidikan_pasca_sarjana_doktor = $req->input('pendidikan_pasca_sarjana_doktor');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->kesesuaian_ps = $req->input('kesesuaian_ps');
        $dosen->jabatan_akademik = $req->input('jabatan_akademik');
        $dosen->sertifikat_pendidik_profesi = $req->input('sertifikat_pendidik_profesi');
        $dosen->sertifikat_kompetensi = $req->input('sertifikat_kompetensi');
        $dosen->mata_kuliah_akreditasi_diampu = $req->input('mata_kuliah_akreditasi_diampu');
        $dosen->kesesuaian_mata_kuliah_diampu = $req->input('kesesuaian_mata_kuliah_diampu');
        $dosen->mata_kuliah_diampu_ps_lain = $req->input('mata_kuliah_diampu_ps_lain');
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->updated_at = Carbon::now();
        $dosen->update();

        return redirect('/profil-dosen')->with('success', 'Dosen Tetap has been updated.');
    }

    public function destroy($id)
    {
        SdmDosen::find($id)->delete();
        return back()->with('error', 'Dosen Tetap has been deleted.');
    }

}
