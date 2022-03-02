<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $select = Option::select('tahun_laporan')->get();
        $where = Option::all()->where('tahun_laporan');

        return view('home',[
            'title' => 'Home',
            'select' => $select,
            'where' => $where

        ]);
    }
    
}
