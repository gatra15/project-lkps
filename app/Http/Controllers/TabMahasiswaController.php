<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\MahasiswaAsing;
use Illuminate\Http\Request;

class TabMahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $mahasiswa_asing = MahasiswaAsing::all();
        
        return view('tab.mahasiswa', [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa,
            'mahasiswa_asing' => $mahasiswa_asing,
        ]);
    }
}
