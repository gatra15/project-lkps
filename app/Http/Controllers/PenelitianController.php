<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index()
    {
        return view('tab.penelitian', [
            'title' => 'Penelitian'
        ]);
    }
}
