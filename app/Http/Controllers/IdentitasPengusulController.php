<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use App\Models\IdentitasPengusul;
use App\Models\SimulasiPenilaian;
use Illuminate\Support\Facades\DB;

class IdentitasPengusulController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $cek = SimulasiPenilaian::where($where)->exists();

        if(!$cek)
        {
            SimulasiPenilaian::create([
                'tahun_laporan' => $tahun,
                'prodi' => $prodi,
            ]);
        }

        $identitas = IdentitasPengusul::all();
        $prodi = ProgramStudi::all();
        $upps = (new UppsController)->index();
        // tim penyusun
        $tim = (new TimPenyusunController)->index();
        return view('tab.identitasPengusul', [
            'title' => 'Identitas Pengusul',
            'identitas' => $identitas,
            'timpenyusun' => $tim,
            'prodi' => $prodi,
            'upps' => $upps,
        ]);
    }

    public function store(Request $req)
    {
        // $req->validate([
        //     'perguruan_tinggi' => 'required',
        //     'unit_pengelola' => 'required',
        //     'jenis_program' => 'required',
        //     'prodi' => 'required',
        //     'alamat' => 'required',
        //     'no_telepon' => 'required',
        //     'email_website' => 'required',
        //     'no_sk1' => 'required',
        //     'tanggal_sk_pendirian' => 'required',
        //     'pejabat_penandatanganan' => 'required',
        //     'no_sk2' => 'required',
        //     'tanggal_sk_pembukaan' => 'required',
        //     'pejabat_pembukaan' => 'required',
        //     'sk_pembukaan' => 'required',
        //     'tahun_pertama' => 'required',
        //     'peningkatan_terbaru' => 'required',
        //     'nomor_sk_banpt' => 'required',
        // ]);

        // Lampiran 1
        if($req->file('no_sk1_berkas')) {
            $filenameWithExt = $req->file('no_sk1_berkas')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('no_sk1_berkas')->getClientOriginalExtension();
            $filenameSave1 = $filename.'.'.$extension;
        } else {
            $filenameSave1 = 'Tidak Ada File yang disisipkan';
        }

        // Lampiran 2
        if($req->file('no_sk2_berkas')) {
            $filenameWithExt = $req->file('no_sk2_berkas')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('no_sk2_berkas')->getClientOriginalExtension();
            $filenameSave2 = $filename.'.'.$extension;
        } else {
            $filenameSave2 = 'Tidak Ada File yang disisipkan';
        }

        // Lampiran Akreditasi
        if($req->file('peningkatan_terbaru_berkas')) {
            $filenameWithExt = $req->file('peningkatan_terbaru_berkas')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('peningkatan_terbaru_berkas')->getClientOriginalExtension();
            $filenameSave3 = $filename.'.'.$extension;
        } else {
            $filenameSave3 = 'Tidak Ada File yang disisipkan';
        }

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
        $pengusul->no_sk1_berkas = $req->file('no_sk1_berkas')->storeAs('/identitas-pengusul', $filenameSave1);        
        $pengusul->tanggal_sk_pendirian = $req->input('tanggal_sk_pendirian');        
        $pengusul->pejabat_penandatanganan = $req->input('pejabat_penandatanganan');        
        $pengusul->no_sk2 = $req->input('no_sk2');        
        $pengusul->no_sk2_berkas = $req->file('no_sk2_berkas')->storeAs('/identitas-pengusul', $filenameSave2);  
        $pengusul->tanggal_sk_pembukaan = $req->input('tanggal_sk_pembukaan');        
        $pengusul->pejabat_pembukaan = $req->input('pejabat_pembukaan');        
        $pengusul->sk_pembukaan = $req->input('sk_pembukaan');        
        $pengusul->tahun_pertama = $req->input('tahun_pertama');        
        $pengusul->peningkatan_terbaru = $req->input('peningkatan_terbaru');        
        $pengusul->peningkatan_terbaru_berkas = $req->file('peningkatan_terbaru_berkas')->storeAs('/identitas-pengusul', $filenameSave3);
        $pengusul->nomor_sk_banpt = $req->input('nomor_sk_banpt');        
        $pengusul->created_by = auth()->user()->name;
        $pengusul->created_at = Carbon::now();
        // dd($pengusul);
        $pengusul->save();
        return redirect('/identitas-pengusul')->with('success', 'Data Identitas Pengusul berhasil ditambahkan.');
        
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
        if($req->file('no_sk1_berkas')) {
            $filenameWithExt = $req->file('no_sk1_berkas')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('no_sk1_berkas')->getClientOriginalExtension();
            $filenameSave1 = $filename.'.'.$extension;
            $pengusul->no_sk1_berkas = $req->file('no_sk1_berkas')->storeAs('/identitas-pengusul', $filenameSave1);
        } else {
            
        }        
        $pengusul->tanggal_sk_pendirian = $req->input('tanggal_sk_pendirian');        
        $pengusul->pejabat_penandatanganan = $req->input('pejabat_penandatanganan');        
        $pengusul->no_sk2 = $req->input('no_sk2');        
        if($req->file('no_sk2_berkas')) {
            $filenameWithExt = $req->file('no_sk2_berkas')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('no_sk2_berkas')->getClientOriginalExtension();
            $filenameSave2 = $filename.'.'.$extension;
            $pengusul->no_sk1_berkas = $req->file('no_sk2_berkas')->storeAs('/identitas-pengusul', $filenameSave2);
        } else {
            
        }        
        $pengusul->tanggal_sk_pembukaan = $req->input('tanggal_sk_pembukaan');        
        $pengusul->pejabat_pembukaan = $req->input('pejabat_pembukaan');        
        $pengusul->sk_pembukaan = $req->input('sk_pembukaan');        
        $pengusul->tahun_pertama = $req->input('tahun_pertama');        
        $pengusul->peningkatan_terbaru = $req->input('peningkatan_terbaru');  
        if($req->file('peningkatan_terbaru_berkas')) {
            $filenameWithExt = $req->file('peningkatan_terbaru_berkas')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('peningkatan_terbaru_berkas')->getClientOriginalExtension();
            $filenameSave3 = $filename.'.'.$extension;
            $pengusul->peningkatan_terbaru_berkas = $req->file('peningkatan_terbaru_berkas')->storeAs('/identitas-pengusul', $filenameSave3);
        } else {
            
        }          
        $pengusul->nomor_sk_banpt = $req->input('nomor_sk_banpt');        
        $pengusul->created_by = auth()->user()->name;
        $pengusul->created_at = Carbon::now();
        $pengusul->update();
        return redirect('/identitas-pengusul')->with('success', 'Data Identitas Pengusul berhasil diubah.'); 
        
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    public function destroy($id)
    {
        IdentitasPengusul::find($id)->delete();
        return back()->with('success', 'Data Identitas Pengusul berhasil dihapus.');
    }
}
