<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\IdentitasPengusul;
use Illuminate\Support\Facades\DB;

class IdentitasPengusulController extends Controller
{
    public function index()
    {
        $identitas = IdentitasPengusul::all();
        // tim penyusun
        $tim = (new TimPenyusunController)->index();
        return view('tab.identitasPengusul', [
            'title' => 'Identitas Pengusul',
            'identitas' => $identitas,
            'timpenyusun' => $tim,
        ]);
    }

    public function store(Request $req)
    {
        $connection = 'mysql';
        try{
        $pengusul = new IdentitasPengusul;
        $pengusul->perguruan_tinggi = $req->input('perguruan_tinggi');        
        $pengusul->unit_pengelola = $req->input('unit_pengelola');        
        $pengusul->jenis_program = $req->input('jenis_program');        
        $pengusul->prodi = $req->input('prodi');        
        $pengusul->alamat = $req->input('alamat');        
        $pengusul->no_telepon = $req->input('no_telepon');        
        $pengusul->email_website = $req->input('email_website');        
        $pengusul->no_sk1 = $req->input('no_sk1');        
        $pengusul->tanggal_sk_pendirian = $req->input('tanggal_sk_pendirian');        
        $pengusul->pejabat_penandatanganan = $req->input('pejabat_penandatanganan');        
        $pengusul->no_sk2 = $req->input('no_sk2');        
        $pengusul->tanggal_sk_pembukaan = $req->input('tanggal_sk_pembukaan');        
        $pengusul->pejabat_pembukaan = $req->input('pejabat_pembukaan');        
        $pengusul->sk_pembukaan = $req->input('sk_pembukaan');        
        $pengusul->tahun_pertama = $req->input('tahun_pertama');        
        $pengusul->peningkatan_terbaru = $req->input('peningkatan_terbaru');        
        $pengusul->nomor_sk_banpt = $req->input('nomor_sk_banpt');        
        $pengusul->created_by = auth()->user()->name;
        $pengusul->created_at = Carbon::now();
        $pengusul->save();
        return redirect('/identitas-pengusul')->with('success', 'New Identitas Pengusul has been created');
        
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    public function show(Request $req, $id)
    {
        $identitasview = IdentitasPengusul::find($id);
        return $identitasview;
    }

    public function update(Request $req, $id)
    {
        $connection = 'mysql';
        
        try{
        $pengusul = IdentitasPengusul::find($id);
        $pengusul->perguruan_tinggi = $req->input('perguruan_tinggi');        
        $pengusul->unit_pengelola = $req->input('unit_pengelola');        
        $pengusul->jenis_program = $req->input('jenis_program');        
        $pengusul->prodi = $req->input('prodi');        
        $pengusul->alamat = $req->input('alamat');        
        $pengusul->no_telepon = $req->input('no_telepon');        
        $pengusul->email_website = $req->input('email_website');        
        $pengusul->no_sk1 = $req->input('no_sk1');        
        $pengusul->tanggal_sk_pendirian = $req->input('tanggal_sk_pendirian');        
        $pengusul->pejabat_penandatanganan = $req->input('pejabat_penandatanganan');        
        $pengusul->no_sk2 = $req->input('no_sk2');        
        $pengusul->tanggal_sk_pembukaan = $req->input('tanggal_sk_pembukaan');        
        $pengusul->pejabat_pembukaan = $req->input('pejabat_pembukaan');        
        $pengusul->sk_pembukaan = $req->input('sk_pembukaan');        
        $pengusul->tahun_pertama = $req->input('tahun_pertama');        
        $pengusul->peningkatan_terbaru = $req->input('peningkatan_terbaru');        
        $pengusul->nomor_sk_banpt = $req->input('nomor_sk_banpt');        
        $pengusul->created_by = auth()->user()->name;
        $pengusul->created_at = Carbon::now();
        $pengusul->save();
        return redirect('/identitas-pengusul')->with('success', 'New Identitas Pengusul has been created'); 
        
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }
}
