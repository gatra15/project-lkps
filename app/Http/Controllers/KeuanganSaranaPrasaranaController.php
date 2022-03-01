<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganSaranaPrasaranaController extends Controller
{
    public function index()
    {
        return view('tab.keuanganSarpras', [
            'title' => 'Keuangan Sarpras'
        ]);
    }
}
