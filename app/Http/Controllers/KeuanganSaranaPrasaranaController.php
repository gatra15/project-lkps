<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SaranaDana;
use Illuminate\Http\Request;
use App\Models\MediaPublikasi;
use App\Models\JenisPenggunaan;
use App\Exports\SaranaDanaExport;
use Maatwebsite\Excel\Facades\Excel;

class KeuanganSaranaPrasaranaController extends Controller
{
    public function index()
    {
        $keuangan = SaranaDana::with('sarana', 'biaya')->get();
        // ddd($keuangan);
        $jumlah1 = [
          'ts2'         => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('unit_pengelola_ts2'), 
          'ts1'         => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('unit_pengelola_ts1'), 
          'ts'          => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('unit_pengelola_ts'), 
          'average'     => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('unit_pengelola_average'), 
          'ps_ts2'      => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('ps_ts2'), 
          'ps_ts1'      => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('ps_ts1'), 
          'ps_ts'       => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('ps_ts'),
          'ps_average'  => SaranaDana::where('sarana_id', 1)->orWhere('sarana_id', 2)->get()->sum('ps_average'),
        ];
        
        $jumlah2 = [
            'ts2'         => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('unit_pengelola_ts2'), 
            'ts1'         => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('unit_pengelola_ts1'), 
            'ts'          => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('unit_pengelola_ts'), 
            'average'     => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('unit_pengelola_average'), 
            'ps_ts2'      => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('ps_ts2'), 
            'ps_ts1'      => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('ps_ts1'), 
            'ps_ts'       => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('ps_ts'),
            'ps_average'  => SaranaDana::where('sarana_id', 3)->orWhere('sarana_id', 4)->get()->sum('ps_average'),
        ];
        $jumlah3 = [
            'ts2'         => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('unit_pengelola_ts2'), 
            'ts1'         => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('unit_pengelola_ts1'), 
            'ts'          => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('unit_pengelola_ts'), 
            'average'     => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('unit_pengelola_average'), 
            'ps_ts2'      => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('ps_ts2'), 
            'ps_ts1'      => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('ps_ts1'), 
            'ps_ts'       => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('ps_ts'),
            'ps_average'  => SaranaDana::where('sarana_id', 5)->orWhere('sarana_id', 6)->get()->sum('ps_average'),
        ];
        $total = [
            'ts2'         => $jumlah1['ts2'] +  $jumlah2['ts2'] +  $jumlah3['ts2'],
            'ts1'         => $jumlah1['ts1'] +  $jumlah2['ts1'] +  $jumlah3['ts1'],
            'ts'          => $jumlah1['ts'] +  $jumlah2['ts'] +  $jumlah3['ts'],
            'average'     => $jumlah1['average'] +  $jumlah2['average'] +  $jumlah3['average'],
            'ps_ts2'      => $jumlah1['ps_ts2'] +  $jumlah2['ps_ts2'] +  $jumlah3['ps_ts2'],
            'ps_ts1'      => $jumlah1['ps_ts1'] +  $jumlah2['ps_ts1'] +  $jumlah3['ps_ts1'],
            'ps_ts'       => $jumlah1['ps_ts'] +  $jumlah2['ps_ts'] +  $jumlah3['ps_ts'],
            'ps_average'  => $jumlah1['ps_average'] +  $jumlah2['ps_average'] +  $jumlah3['ps_average'],
        ];

        // ddd($keuangan);
        return view('tab.keuanganSarpras', [
            'title' => 'Keuangan Sarpras',
            'keuangan' => $keuangan,
            'jumlah1' => $jumlah1,
            'jumlah2' => $jumlah2,
            'jumlah3' => $jumlah3,
            'total' => $total,
        ]);
    }

    public function update(Request $req, $id)
    {
        $req->validate([
           'unit_pengelola_ts2',
           'unit_pengelola_ts1',
           'unit_pengelola_ts',
           'ps_ts2',
           'ps_ts1',
           'ps_ts',
        ]);

        $data = SaranaDana::find($id);
        $data->sarana_id = $req->input('sarana_id');
        $data->biaya_id = $req->input('biaya_id');
        $data->unit_pengelola_ts2 = (int) $req->input('unit_pengelola_ts2');
        $data->unit_pengelola_ts1 = (int) $req->input('unit_pengelola_ts1');
        $data->unit_pengelola_ts = (int) $req->input('unit_pengelola_ts');
        $data->unit_pengelola_average = (float) ($req->unit_pengelola_ts2 + $req->unit_pengelola_ts1 + $req->unit_pengelola_ts)/3;
        $data->ps_ts2 = (int) $req->input('ps_ts2');
        $data->ps_ts1 = (int) $req->input('ps_ts1');
        $data->ps_ts = (int) $req->input('ps_ts');
        $data->ps_average = (float) ($req->ps_ts2 + $req->ps_ts1 + $req->ps_ts)/3;
        $data->tahun_laporan = 2022;
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        // ddd($data);
        $data->update();

        return back()->with('success', 'Data Keuangan Sarana Prasarana berhasil ditambahkan.');
    }

    public function destroy(Request $req, $id)
    {
        $data = SaranaDana::find($id);
        $data->sarana_id = $req->input('sarana_id');
        $data->biaya_id = $req->input('biaya_id');
        $data->unit_pengelola_ts2 = null;
        $data->unit_pengelola_ts1 = null;
        $data->unit_pengelola_ts = null;
        $data->unit_pengelola_average = null;
        $data->ps_ts2 = null;
        $data->ps_ts1 = null;
        $data->ps_ts = null;
        $data->ps_average = null;
        $data->tahun_laporan = 2022;
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        // ddd($data);
        $data->update();
        return back()->with('error', 'Data Keuangan Sarana Prasarana berhasil dihapus.');

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
