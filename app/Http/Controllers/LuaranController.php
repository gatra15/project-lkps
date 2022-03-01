<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuaranController extends Controller
{
    public function index()
    {
        return view('tab.luaran', [
            'title' => 'Luaran'
        ]);
    }
}
