<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndikatorTataKerjasama;

class TataPamongController extends Controller
{
    public function index()
    {
        $kerjasama = IndikatorTataKerjasama::all();
        
        return view('tab.tataPamong', [
            'title' => 'Tata Pamong',
            'kerjasama' => $kerjasama
        ]);
    }
}
