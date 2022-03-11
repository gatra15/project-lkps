<?php

namespace App\Http\Controllers;

use App\Models\PrestasiMahasiswa;
use Illuminate\Http\Request;

class LuaranController extends Controller
{
    public function index()
    {
        $prestasi = (new PrestasiMahasiswaController)->index();
        // capaian
        $capaianPembelajaran = (new CapaianPembelajaranController)->index();

        return view('tab.luaran', [
            'title' => 'Luaran',
            'prestasi' => $prestasi,
            'capaianPembelajaran' => $capaianPembelajaran,
        ]);
    }
}
