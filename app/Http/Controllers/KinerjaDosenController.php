<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KinerjaDosenController extends Controller
{
    public function index()
    {
        return view('tab.kinerjadosentab.kinerjaDosen', [
            'title' => 'Kinerja Dosen'
        ]);
    }
}
