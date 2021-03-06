<?php

namespace App\Http\Controllers;

use App\Models\EfektifitasProduktifitasPendidikan;
use App\Models\PrestasiMahasiswa;
use Illuminate\Http\Request;

class LuaranController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        
        $prestasi = (new PrestasiMahasiswaController)->index();
        // capaian
        $capaianPembelajaran = (new CapaianPembelajaranController)->index();
        // efektifitas
        $efektifitasPrestasi = (new EfektifitasProduktifitasPendidikanController)->index();
        // ddd($efektifitasPrestasi);
        // Daya Saing Lulusan
        $dayasaing = (new WaktuTungguLulusanController)->index();

        // Kesesuaian Bidang
        $kesesuaianBidang = (new KesesuaianBidangKerjaController)->index();

        // Kinerja Lulusan
        $kinerjaLulusan = (new KinerjaLulusanController)->index();

        // Kepuasan Pengguna
        $kepuasanPengguna = (new KepuasanPenggunaController)->index();

        // Publikasi Ilmiah Mahasiswa
        $publikasi = (new PublikasiIlmiahMahasiswaController)->index();
        // Luaran
        $luaran = (new LuaranPkmMahasiswaController)->index(); 

        return view('tab.luaran', [
            'title' => 'Luaran',
            'prestasi' => $prestasi,
            'dayasaing' => $dayasaing,
            'kesesuaianBidang' => $kesesuaianBidang,
            'kinerjaLulusan' => $kinerjaLulusan,
            'kepuasanPengguna' => $kepuasanPengguna,
            'capaianPembelajaran' => $capaianPembelajaran,
            'efektifitasPrestasi' => $efektifitasPrestasi,
            'publikasi' => $publikasi,
            'luaran' => $luaran,
        ]);
    }
}
