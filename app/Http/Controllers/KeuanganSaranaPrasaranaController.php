<?php

namespace App\Http\Controllers;

use App\Models\SaranaDana;
use Illuminate\Http\Request;
use App\Models\MediaPublikasi;
use App\Exports\SaranaDanaExport;
use Maatwebsite\Excel\Facades\Excel;

class KeuanganSaranaPrasaranaController extends Controller
{
    public function index()
    {
        $keuangan = SaranaDana::all();
        return view('tab.keuanganSarpras', [
            'title' => 'Keuangan Sarpras',
        ]);
    }

    public function exportToExcel()
    {
        return Excel::download(new SaranaDanaExport, 'sarana-dana.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new SaranaDanaExport, 'sarana-dana.csv');
    }
}
