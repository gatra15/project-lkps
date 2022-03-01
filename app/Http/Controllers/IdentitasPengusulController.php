<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentitasPengusulController extends Controller
{
    public function index()
    {
        return view('tab.identitasPengusul', [
            'title' => 'Identitas Pengusul'
        ]);
    }
}
