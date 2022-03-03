<?php

namespace App\Http\Controllers;

use Excel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\TataPamongExport;
use Illuminate\Support\Facades\Auth;
use App\Models\IndikatorTataKerjasama;

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

    public function store(Request $request)
    {
        $this->validate(request(), [
            'tridharma'         => 'required',
            'lembaga_mitra'     => 'required',
            'judul_kegiatan'    => 'required',
            'manfaat'           => 'required',
            'waktu_durasi'      => 'required',
            'bukti_kerjasama'   => 'required',
            'tahun_laporan'     => 'required',
            'prodi'             => 'required',
        ]);

        $indikator = new IndikatorTataKerjasama();
        $indikator->tridharma = $request->input('tridharma');
        $indikator->lembaga_mitra = $request->input('lembaga_mitra');
        $indikator->judul_kegiatan = $request->input('judul_kegiatan');
        $indikator->manfaat = $request->input('manfaat');
        $indikator->waktu_durasi = $request->input('waktu_durasi');
        $indikator->bukti_kerjasama = $request->input('bukti_kerjasama');
        $indikator->tahun_laporan = $request->input('tahun_laporan');
        $indikator->prodi = Auth::user()->prodi;
        $indikator->created_by = Auth::user()->name;
        $indikator->created_at = Carbon::now();
        $indikator->save();

        return redirect('/tata-pamong-tata-kelola-kerjasama')->with('success', 'New Indikator Tata Kerjasama has been added!');
    }

    public function edit($id)
    {
        $indikator = IndikatorTataKerjasama::find($id);
        return view('tab.tataPamong', ['indikator' => $indikator]);
    }

    public function update(Request $req)
    {
        $this->validate(request(), [
            'tridharma'         => 'required',
            'lembaga_mitra'     => 'required',
            'judul_kegiatan'    => 'required',
            'manfaat'           => 'required',
            'waktu_durasi'      => 'required',
            'bukti_kerjasama'   => 'required',
            'tahun_laporan'     => 'required',
            'prodi'             => 'required',
        ]);

        $indikator = IndikatorTataKerjasama::find($req->id);
        $indikator->tridharma = $$req->input('tridharma');
        $indikator->lembaga_mitra = $$req->input('lembaga_mitra');
        $indikator->judul_kegiatan = $$req->input('judul_kegiatan');
        $indikator->manfaat = $$req->input('manfaat');
        $indikator->waktu_durasi = $$req->input('waktu_durasi');
        $indikator->bukti_kerjasama = $$req->input('bukti_kerjasama');
        $indikator->tahun_laporan = $$req->input('tahun_laporan');
        $indikator->prodi = Auth::user()->prodi;
        $indikator->created_by = Auth::user()->name;
        $indikator->created_at = Carbon::now();
        $indikator->update();
        return redirect('/tata-pamong-tata-kelola-kerjasama')->with('success', 'Indikator Tata Kerjasama has been updated!');
    }

    public function destroy($id)
    {
        IndikatorTataKerjasama::where('id', $id)->delete();
        return redirect('/modul/lab')->with('success', 'Indikator Tata Kerjasama has been deleted.');
        
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
