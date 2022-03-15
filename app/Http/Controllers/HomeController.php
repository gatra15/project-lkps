<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramStudi;

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
        $prodi = ProgramStudi::all();

        return view('home',[
            'title' => 'Home',
            'prodi' => $prodi,
        ]);
    }

    public function tahun(Request $request)
    {
        session([
            'tahun_laporan' => $request->tahun_laporan,
            'prodi' => $request->prodi,
        ]);
        return redirect()->back();
    }
}
