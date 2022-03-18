<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SaranaDana;
use Illuminate\Http\Request;
use App\Models\saranaPublikasi;
use App\Models\JenisPenggunaan;
use App\Exports\SaranaDanaExport;
use Maatwebsite\Excel\Facades\Excel;

class KeuanganSaranaPrasaranaController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'sarana_id' => 1, 'sarana_id' => 2];
        $where2 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'sarana_id' => 3, 'sarana_id' => 4];
        $where3 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'sarana_id' => 5, 'sarana_id' => 6];

        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $cek = SaranaDana::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();
        $cek1 = SaranaDana::where('tahun_laporan', $tahun - 1)->where('prodi', $prodi)->exists();
        $cek2 = SaranaDana::where('tahun_laporan', $tahun - 2)->where('prodi', $prodi)->exists();

    // cek sarana
        $sarana11 = SaranaDana::where('sarana_id', 1)->where('biaya_id', 1)->exists();
        $sarana12 = SaranaDana::where('sarana_id', 1)->where('biaya_id', 2)->exists();
        $sarana13 = SaranaDana::where('sarana_id', 1)->where('biaya_id', 3)->exists();
        $sarana14 = SaranaDana::where('sarana_id', 1)->where('biaya_id', 4)->exists();
        $sarana2 = SaranaDana::where('sarana_id', 2)->exists();
        $sarana3 = SaranaDana::where('sarana_id', 3)->exists();
        $sarana4 = SaranaDana::where('sarana_id', 4)->exists();
        $sarana5 = SaranaDana::where('sarana_id', 5)->exists();
        $sarana6 = SaranaDana::where('sarana_id', 6)->exists();
        $sarana7 = SaranaDana::where('sarana_id', 7)->exists();
    // End sarana
        
        // dd($sarana2);
        $w = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $w1 = ['tahun_laporan' => $tahun - 1, 'prodi' => $prodi];
        $w2 = ['tahun_laporan' => $tahun - 2, 'prodi' => $prodi];
    
    // Cek 11
        if(!($cek2 && $sarana11)){
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 1,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana11)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 1,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana11)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 1,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 12
        if(!($cek2 && $sarana12)){
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 2,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana12)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 2,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana12)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 2,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 13
        if(!($cek2 && $sarana13)){
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 3,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana13)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 3,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana13)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 3,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 14
        if(!($cek2 && $sarana14)){
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 4,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana14)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 4,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana14)) {
            SaranaDana::create([
                'sarana_id' => 1,
                'biaya_id' => 4,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 2
        if(!($cek2 && $sarana2)){
            SaranaDana::create([
                'sarana_id' => 2,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana2)) {
            SaranaDana::create([
                'sarana_id' => 2,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana2)) {
            SaranaDana::create([
                'sarana_id' => 2,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 3
        if(!($cek2 && $sarana3)){
            SaranaDana::create([
                'sarana_id' => 3,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana3)) {
            SaranaDana::create([
                'sarana_id' => 3,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana3)) {
            SaranaDana::create([
                'sarana_id' => 3,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 4
        if(!($cek2 && $sarana4)){
            SaranaDana::create([
                'sarana_id' => 4,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana4)) {
            SaranaDana::create([
                'sarana_id' => 4,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana4)) {
            SaranaDana::create([
                'sarana_id' => 4,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 5
        if(!($cek2 && $sarana5)){
            SaranaDana::create([
                'sarana_id' => 5,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana5)) {
            SaranaDana::create([
                'sarana_id' => 5,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana5)) {
            SaranaDana::create([
                'sarana_id' => 5,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

    // Cek 6
        if(!($cek2 && $sarana6)){
            SaranaDana::create([
                'sarana_id' => 6,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana6)) {
            SaranaDana::create([
                'sarana_id' => 6,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana6)) {
            SaranaDana::create([
                'sarana_id' => 6,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }
    // Cek 7
        if(!($cek2 && $sarana7)){
            SaranaDana::create([
                'sarana_id' => 7,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!($cek1 && $sarana7)) {
            SaranaDana::create([
                'sarana_id' => 7,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!($cek && $sarana7)) {
            SaranaDana::create([
                'sarana_id' => 7,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }
    // End Cek

    // sarana 1
        $ts_all = SaranaDana::with('sarana', 'biaya')->where($w)->get();
        $ts = SaranaDana::with('sarana', 'biaya')->where($w)->where('sarana_id', 1)->where('biaya_id', 1)->get();
        $ts1 = SaranaDana::with('sarana', 'biaya')->where($w1)->where('sarana_id', 1)->where('biaya_id', 1)->get();
        $ts2 = SaranaDana::with('sarana', 'biaya')->where($w2)->where('sarana_id', 1)->where('biaya_id', 1)->get();
        
    // sarana 12
        $ts_sarana12 = SaranaDana::with('sarana', 'biaya')->where($w)->where('sarana_id', 1)->where('biaya_id', 2)->get();
        $ts1_sarana12 = SaranaDana::with('sarana', 'biaya')->where($w1)->where('sarana_id', 1)->where('biaya_id', 2)->get();
        $ts2_sarana12 = SaranaDana::with('sarana', 'biaya')->where($w2)->where('sarana_id', 1)->where('biaya_id', 2)->get();
        
    // sarana 13
        $ts_sarana13 = SaranaDana::with('sarana', 'biaya')->where($w)->where('sarana_id', 1)->where('biaya_id', 3)->get();
        $ts1_sarana13 = SaranaDana::with('sarana', 'biaya')->where($w1)->where('sarana_id', 1)->where('biaya_id', 3)->get();
        $ts2_sarana13 = SaranaDana::with('sarana', 'biaya')->where($w2)->where('sarana_id', 1)->where('biaya_id', 3)->get();
        
    // sarana 14
        $ts_sarana14 = SaranaDana::with('sarana', 'biaya')->where($w)->where('sarana_id', 1)->where('biaya_id', 4)->get();
        $ts1_sarana14 = SaranaDana::with('sarana', 'biaya')->where($w1)->where('sarana_id', 1)->where('biaya_id', 4)->get();
        $ts2_sarana14 = SaranaDana::with('sarana', 'biaya')->where($w2)->where('sarana_id', 1)->where('biaya_id', 4)->get();

    // sarana 2
        $ts_sarana2 = SaranaDana::with('sarana')->where($w)->where('sarana_id', 2)->get();
        $ts1_sarana2 = SaranaDana::with('sarana')->where($w1)->where('sarana_id', 2)->get();
        $ts2_sarana2 = SaranaDana::with('sarana')->where($w2)->where('sarana_id', 2)->get();

    // sarana 3
        $ts_sarana3 = SaranaDana::with('sarana')->where($w)->where('sarana_id', 3)->get();
        $ts1_sarana3 = SaranaDana::with('sarana')->where($w1)->where('sarana_id', 3)->get();
        $ts2_sarana3 = SaranaDana::with('sarana')->where($w2)->where('sarana_id', 3)->get();
        
    // sarana 4
        $ts_sarana4 = SaranaDana::with('sarana')->where($w)->where('sarana_id', 4)->get();
        $ts1_sarana4 = SaranaDana::with('sarana')->where($w1)->where('sarana_id', 4)->get();
        $ts2_sarana4 = SaranaDana::with('sarana')->where($w2)->where('sarana_id', 4)->get();

    // sarana 5
        $ts_sarana5 = SaranaDana::with('sarana')->where($w)->where('sarana_id', 5)->get();
        $ts1_sarana5 = SaranaDana::with('sarana')->where($w1)->where('sarana_id', 5)->get();
        $ts2_sarana5 = SaranaDana::with('sarana')->where($w2)->where('sarana_id', 5)->get();

    // sarana 6
        $ts_sarana6 = SaranaDana::with('sarana')->where($w)->where('sarana_id', 6)->get();
        $ts1_sarana6 = SaranaDana::with('sarana')->where($w1)->where('sarana_id', 6)->get();
        $ts2_sarana6 = SaranaDana::with('sarana')->where($w2)->where('sarana_id', 6)->get();
    // sarana 7
        $ts_sarana7 = SaranaDana::with('sarana')->where($w)->where('sarana_id', 7)->get();
        $ts1_sarana7 = SaranaDana::with('sarana')->where($w1)->where('sarana_id', 7)->get();
        $ts2_sarana7 = SaranaDana::with('sarana')->where($w2)->where('sarana_id', 7)->get();
    // End sarana

        // $keuangan = SaranaDana::with('sarana', 'biaya')->get();
        // ddd($keuangan);
        $jumlah1 = [
          'ts2'         => SaranaDana::where($where)->sum('unit_pengelola_ts2'), 
          'ts1'         => SaranaDana::where($where)->sum('unit_pengelola_ts1'), 
          'ts'          => SaranaDana::where($where)->sum('unit_pengelola_ts'), 
          'average'     => SaranaDana::where($where)->sum('unit_pengelola_average'), 
          'ps_ts2'      => SaranaDana::where($where)->sum('ps_ts2'), 
          'ps_ts1'      => SaranaDana::where($where)->sum('ps_ts1'), 
          'ps_ts'       => SaranaDana::where($where)->sum('ps_ts'),
          'ps_average'  => SaranaDana::where($where)->sum('ps_average'),
        ];
        
        $jumlah2 = [
            'ts2'         => SaranaDana::where($where2)->sum('unit_pengelola_ts2'), 
            'ts1'         => SaranaDana::where($where2)->sum('unit_pengelola_ts1'), 
            'ts'          => SaranaDana::where($where2)->sum('unit_pengelola_ts'), 
            'average'     => SaranaDana::where($where2)->sum('unit_pengelola_average'), 
            'ps_ts2'      => SaranaDana::where($where2)->sum('ps_ts2'), 
            'ps_ts1'      => SaranaDana::where($where2)->sum('ps_ts1'), 
            'ps_ts'       => SaranaDana::where($where2)->sum('ps_ts'),
            'ps_average'  => SaranaDana::where($where2)->sum('ps_average'),
        ];
        $jumlah3 = [
            'ts2'         => SaranaDana::where($where3)->sum('unit_pengelola_ts2'), 
            'ts1'         => SaranaDana::where($where3)->sum('unit_pengelola_ts1'), 
            'ts'          => SaranaDana::where($where3)->sum('unit_pengelola_ts'), 
            'average'     => SaranaDana::where($where3)->sum('unit_pengelola_average'), 
            'ps_ts2'      => SaranaDana::where($where3)->sum('ps_ts2'), 
            'ps_ts1'      => SaranaDana::where($where3)->sum('ps_ts1'), 
            'ps_ts'       => SaranaDana::where($where3)->sum('ps_ts'),
            'ps_average'  => SaranaDana::where($where3)->sum('ps_average'),
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
        // TS
            'ts_all' => $ts_all,
            'ts' => $ts,
            'ts1' => $ts1,
            'ts2' => $ts2,

            'ts_sarana12' => $ts_sarana12,
            'ts1_sarana12' => $ts1_sarana12,
            'ts2_sarana12' => $ts2_sarana12,

            'ts_sarana13' => $ts_sarana13,
            'ts1_sarana13' => $ts1_sarana13,
            'ts2_sarana13' => $ts2_sarana13,

            'ts_sarana14' => $ts_sarana14,
            'ts1_sarana14' => $ts1_sarana14,
            'ts2_sarana14' => $ts2_sarana14,
            
            'ts_sarana2' => $ts_sarana2,
            'ts1_sarana2' => $ts1_sarana2,
            'ts2_sarana2' => $ts2_sarana2,

            'ts_sarana3' => $ts_sarana3,
            'ts1_sarana3' => $ts1_sarana3,
            'ts2_sarana3' => $ts2_sarana3,

            'ts_sarana4' => $ts_sarana4,
            'ts1_sarana4' => $ts1_sarana4,
            'ts2_sarana4' => $ts2_sarana4,

            'ts_sarana5' => $ts_sarana5,
            'ts1_sarana5' => $ts1_sarana5,
            'ts2_sarana5' => $ts2_sarana5,

            'ts_sarana6' => $ts_sarana6,
            'ts1_sarana6' => $ts1_sarana6,
            'ts2_sarana6' => $ts2_sarana6,

            'ts_sarana7' => $ts_sarana7,
            'ts1_sarana7' => $ts1_sarana7,
            'ts2_sarana7' => $ts2_sarana7,
        // End TS
            'jumlah1' => $jumlah1,
            'jumlah2' => $jumlah2,
            'jumlah3' => $jumlah3,
            'total' => $total,
        ]);
    }

    public function update(Request $req, $year, $sarana, $biaya)
    {
        $tahun = session('tahun_laporan');
        $req->validate([
           'unit_pengelola_ts2',
           'unit_pengelola_ts1',
           'unit_pengelola_ts',
           'ps_ts2',
           'ps_ts1',
           'ps_ts',
        ]);

        // TS-2
        SaranaDana::where('tahun_laporan', $year - 2)->where('sarana_id', $sarana)->where('biaya_id', $biaya)
        ->update([
            'sarana_id' => $req->input('sarana_id'),
            'biaya_id' => $req->input('biaya_id'),
            'unit_pengelola_ts' => $req->input('unit_pengelola_ts2'),
            'ps_ts' => $req->input('ps_ts2'),
            'tahun_laporan' => $tahun - 2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS-1
        SaranaDana::where('tahun_laporan', $year - 1)->where('sarana_id', $sarana)->where('biaya_id', $biaya)
        ->update([
            'sarana_id' => $req->input('sarana_id'),
            'biaya_id' => $req->input('biaya_id'),
            'unit_pengelola_ts' => $req->input('unit_pengelola_ts1'),
            'ps_ts' => $req->input('ps_ts1'),
            'tahun_laporan' => $tahun - 1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS-1
        SaranaDana::where('tahun_laporan', $year)->where('sarana_id', $sarana)->where('biaya_id', $biaya)
        ->update([
            'sarana_id' => $req->input('sarana_id'),
            'biaya_id' => $req->input('biaya_id'),
            'unit_pengelola_ts' => $req->input('unit_pengelola_ts'),
            'ps_ts' => $req->input('ps_ts'),
            'tahun_laporan' => $tahun,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Data Keuangan Sarana Prasarana berhasil ditambahkan.');
    }

    public function destroy(Request $req, $year, $sarana, $biaya)
    {
        $tahun = session('tahun_laporan');
        // TS-2
        SaranaDana::where('tahun_laporan', $year)->where('sarana_id', $sarana)->where('biaya_id', $biaya)
        ->update([
            'sarana_id' => $req->input('sarana_id'),
            'biaya_id' => $req->input('biaya_id'),
            'unit_pengelola_ts' => null,
            'tahun_laporan' => $tahun - 2,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS-1
        SaranaDana::where('tahun_laporan', $year)->where('sarana_id', $sarana)->where('biaya_id', $biaya)
        ->update([
            'sarana_id' => $req->input('sarana_id'),
            'biaya_id' => $req->input('biaya_id'),
            'unit_pengelola_ts' => $req->input('unit_pengelola_ts1'),
            'tahun_laporan' => $tahun - 1,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);

        // TS-1
        SaranaDana::where('tahun_laporan', $year)->where('sarana_id', $sarana)->where('biaya_id', $biaya)
        ->update([
            'sarana_id' => $req->input('sarana_id'),
            'biaya_id' => $req->input('biaya_id'),
            'unit_pengelola_ts' => $req->input('unit_pengelola_ts'),
            'tahun_laporan' => $tahun,
            'prodi' => auth()->user()->prodi->name,
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now(),
        ]);
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
