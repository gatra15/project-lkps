<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilDosenController extends Controller
{
    public function index()
    {
        return view('tab.profildosentab.profilDosen', [
            'title' => 'Profil Dosen'
        ]);
    }
}
