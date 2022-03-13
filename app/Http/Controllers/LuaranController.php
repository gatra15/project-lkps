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

        return view('tab.luaran', [
            'title' => 'Luaran',
            'prestasi' => $prestasi,
            'capaianPembelajaran' => $capaianPembelajaran,
            'efektifitasPrestasi' => $efektifitasPrestasi,
        ]);
    }
}
