<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index()
    {
        return view('tab.pkm', [
            'title' => 'Pkm'
        ]);
    }
}
