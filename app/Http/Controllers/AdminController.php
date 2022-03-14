<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('admin.index', [
            'title' => 'User'
        ]);
    }

    public function prodi(){
        return view('admin.prodi', [
            'title' => 'Prodi'
        ]);
    }
}
