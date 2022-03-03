<?php

namespace App\Http\Controllers;

use App\Exports\TataPamongExport;
use Illuminate\Http\Request;
use App\Models\IndikatorTataKerjasama;
use Excel;

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

    public function exportToExcel()
    {
        return Excel::download(new TataPamongExport, 'indikator-tata-kerjasama.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new TataPamongExport, 'indikator-tata-kerjasama.csv');
    }
}
