<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KinerjaDosenController extends Controller
{
    public function index()
    {
        return view('tab.kinerjaDosen', [
            'title' => 'Kinerja Dosen'
        ]);
    }
}
