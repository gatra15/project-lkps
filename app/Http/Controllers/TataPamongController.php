<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\TataPamongExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\IndikatorTataKerjasama;
use Illuminate\Support\Facades\Storage;

class TataPamongController extends Controller
{
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'tridharma' => 'Pendidikan'];
        $where2 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'tridharma' => 'Penelitian'];
        $where3 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'tridharma' => 'Pengabdian Kepada Masyarakat'];

        $kerjasama = IndikatorTataKerjasama::where($where)->get();
        $kerjasama_asesor = IndikatorTataKerjasama::where($where)->where('is_approved', 1)->get();
        $internasional = IndikatorTataKerjasama::where($where)->where('tingkat', 'Internasional')->count();
        $nasional = IndikatorTataKerjasama::where($where)->where('tingkat', 'Nasional')->count();
        $lokal = IndikatorTataKerjasama::where($where)->where('tingkat', 'Wilayah/Lokal')->count();
        $jmlpendidikan = IndikatorTataKerjasama::where($where1)->count();
        $jmlpendidikan_asesor = IndikatorTataKerjasama::where($where1)->where('is_approved',1)->count();
        $jmlpenelitian = IndikatorTataKerjasama::where($where2)->count();
        $jmlpenelitian_asesor = IndikatorTataKerjasama::where($where2)->where('is_approved',1)->count();
        $jmlpkm = IndikatorTataKerjasama::where($where3)->count();
        $jmlpkm_asesor = IndikatorTataKerjasama::where($where3)->where('is_approved',1)->count();

        return view('tab.tataPamong',[
            'title' => 'Tata Pamong',
            'kerjasama' => $kerjasama,
            'kerjasama_asesor' => $kerjasama_asesor,
            'jmlpendidikan' => $jmlpendidikan,
            'jmlpendidikan_asesor' => $jmlpendidikan_asesor,
            'jmlpenelitian' => $jmlpenelitian,
            'jmlpenelitian_asesor' => $jmlpenelitian_asesor,
            'jmlpkm' => $jmlpkm,
            'jmlpkm_asesor' => $jmlpkm_asesor,
            'internasional' => $internasional,
            'nasional' => $nasional,
            'lokal' => $lokal,
        ]);
    }



    // public function generate()
    // {
    //     $tahun = session('tahun_laporan');
    //     $kerjasama = IndikatorTataKerjasama::where('tahun_laporan', $tahun)->get();
    //     $jmlpendidikan = $kerjasama->where('tridharma', 'Pendidikan')->count();
    //     $jmlpenelitian = $kerjasama->where('tridharma', 'Penelitian')->count();
    //     $jmlpkm = $kerjasama->where('tridharma', 'Pengabdian Kepada Masyarakat')->count();

    //     $pdf = PDF::loadView('tab.tatapamongtab.tatapamongtable',[
    //         'title' => 'Tata Pamong',
    //         'kerjasama' => $kerjasama,
    //         'jmlpendidikan' => $jmlpendidikan,
    //         'jmlpenelitian' => $jmlpenelitian,
    //         'jmlpkm' => $jmlpkm,
    //     ])->setPaper('a4','landscape')->setWarnings(false)->save('tatakerjasama.pdf');


    //     return $pdf->stream('tatakerjasama.pdf');

    // }

    public function store(Request $request)
    {
        
        $connection = 'mysql';
        
        $this->validate($request, [
            'tridharma'         => 'required',
            'lembaga_mitra'     => 'required',
            'tingkat'           => 'required',
            'judul_kegiatan'    => 'required',
            'manfaat'           => 'required',
            'waktu_durasi'      => 'required',
            'bukti_kerjasama'   => 'file|max:4096',
        ]);
        
        if($request->file('bukti_kerjasama')) {
            $filenameWithExt = $request->file('bukti_kerjasama')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('bukti_kerjasama')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
        } else {
            $filenameSimpan = 'Tidak Ada File yang disisipkan';
        }
        
        try{
        $indikator = new IndikatorTataKerjasama;
        $indikator->tridharma = $request->input('tridharma');
        $indikator->lembaga_mitra = $request->input('lembaga_mitra');
        $indikator->tingkat = $request->input('tingkat');
        $indikator->judul_kegiatan = $request->input('judul_kegiatan');
        $indikator->manfaat = $request->input('manfaat');
        $indikator->waktu_durasi = $request->input('waktu_durasi');
        $indikator->bukti_kerjasama = $request->file('bukti_kerjasama')->storeAs('/bukti-kerjasama', $filenameSimpan);
        $indikator->tahun_laporan = session('tahun_laporan');
        $indikator->prodi = auth()->user()->prodi->name;
        $indikator->created_by = auth()->user()->name;
        $indikator->created_at = Carbon::now();
        $indikator->save();

        return back()->with('success', 'Data berhasil ditambahkan.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    public function edit($id)
    {
        $tahun = session('tahun_laporan');
        $indikator = IndikatorTataKerjasama::find($id)->where('tahun_laporan', $tahun);
        return view('tab.tataPamong', ['indikator' => $indikator]);
    }

    public function update(Request $request, $id)
    {
        $connection = 'mysql';
        $tahun = session('tahun_laporan');
        $this->validate($request, [
            'tridharma'         => 'required',
            'lembaga_mitra'     => 'required',
            'tingkat'           => 'required',
            'judul_kegiatan'    => 'required',
            'manfaat'           => 'required',
            'waktu_durasi'      => 'required',
            'bukti_kerjasama'   => 'file|max:4096',
        ]);
        
        
        
        try{
        $indikator = IndikatorTataKerjasama::find($id);
        $indikator->tridharma = $request->input('tridharma');
        $indikator->lembaga_mitra = $request->input('lembaga_mitra');
        $indikator->tingkat = $request->input('tingkat');
        $indikator->judul_kegiatan = $request->input('judul_kegiatan');
        $indikator->manfaat = $request->input('manfaat');
        $indikator->waktu_durasi = $request->input('waktu_durasi');

        if(Storage::exists(asset('storage/'.$indikator->bukti_kerjasama))) {
            Storage::delete(asset('storage/'.$indikator->bukti_kerjasama));
        }
        // file
        if($request->file('bukti_kerjasama')) {
            $filenameWithExt = $request->file('bukti_kerjasama')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('bukti_kerjasama')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
            $indikator->bukti_kerjasama = $request->file('bukti_kerjasama')->storeAs('/bukti-kerjasama', $filenameSimpan);
        } else {
        
        }
       
        $indikator->tahun_laporan = $tahun;
        $indikator->prodi = auth()->user()->prodi->name;
        $indikator->updated_by = auth()->user()->name;
        $indikator->updated_at = Carbon::now();
        // dd($indikator);
        $indikator->update();

        return back()->with('success', 'Data berhasil diubah.');

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
        IndikatorTataKerjasama::find($id)->delete();
        return back()->with('error', 'Data berhasil dihapus.');
        
    }

    public function exportToExcel()
    {
        return Excel::download(new TataPamongExport, 'indikator-tata-kerjasama.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new TataPamongExport, 'indikator-tata-kerjasama.csv');
    }

    public function approve($id)
    {
        $data = IndikatorTataKerjasama::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Indikator Tata Kerjasama telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Indikator Tata Kerjasama berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = IndikatorTataKerjasama::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Indikator Tata Kerjasama berhasil ditolak.');
    }
}
