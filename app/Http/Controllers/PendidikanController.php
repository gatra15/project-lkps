<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        return view('tab.pendidikan', [
            'title' => 'Pendidikan'
        ]);
    }
}
