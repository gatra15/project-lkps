<?php

namespace App\Http\Controllers;

use App\Models\EfektifitasProduktifitasPendidikan;
use App\Models\PrestasiMahasiswa;
use Illuminate\Http\Request;

class LuaranController extends Controller
{
    public function index()
    {
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

        // Luaran
        // $luaranPenelitian = 

        return view('tab.luaran', [
            'title' => 'Luaran',
            'prestasi' => $prestasi,
            'dayasaing' => $dayasaing,
            'kesesuaianBidang' => $kesesuaianBidang,
            'kinerjaLulusan' => $kinerjaLulusan,
            'kepuasanPengguna' => $kepuasanPengguna,
        ]);
    }
}
