<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap;

class SdmEkuivalenWaktuMengajarPenuhDosenTetapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ewmpdosen = SdmEkuivalenWaktuMengajarPenuhDosenTetap::all();
        return view('tab.profildosentab.ewmp', ['ewmpdosen' => $ewmpdosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'nama' => 'required',
            'dtps' => 'required',
            'ps_akreditasi' => 'required',
            'ps_lain_dalam_pt' => 'required',
            'ps_lain_luar_pt' => 'required',
            'penelitian' => 'required',
            'pkm' => 'required',
            'penunjang' => 'required',
            'sks' => 'required',
            'average_per_sks' => 'required',
        ]);

        $dosen = new SdmEkuivalenWaktuMengajarPenuhDosenTetap;
        $dosen->nama = $req->input('nama');
        $dosen->dtps = $req->input('dtps');
        $dosen->ps_akreditasi = $req->input('ps_akreditasi');
        $dosen->ps_lain_dalam_pt = $req->input('ps_lain_dalam_pt');
        $dosen->ps_lain_luar_pt = $req->input('ps_lain_luar_pt');
        $dosen->penelitian = $req->input('penelitian');
        $dosen->pkm = $req->input('pkm');
        $dosen->penunjang = $req->input('penunjang');
        $dosen->sks = $req->input('sks');
        $dosen->average_per_sks = $req->input('average_per_sks');
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return redirect('/profil-dosen/ewmp')->with('success', 'New SDM EWMP has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap  $sdmEkuivalenWaktuMengajarPenuhDosenTetap
     * @return \Illuminate\Http\Response
     */
    public function show(SdmEkuivalenWaktuMengajarPenuhDosenTetap $sdmEkuivalenWaktuMengajarPenuhDosenTetap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap  $sdmEkuivalenWaktuMengajarPenuhDosenTetap
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmEkuivalenWaktuMengajarPenuhDosenTetap $sdmEkuivalenWaktuMengajarPenuhDosenTetap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap  $sdmEkuivalenWaktuMengajarPenuhDosenTetap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'nama' => 'required',
            'dtps' => 'required',
            'ps_akreditasi' => 'required',
            'ps_lain_dalam_pt' => 'required',
            'ps_lain_luar_pt' => 'required',
            'penelitian' => 'required',
            'pkm' => 'required',
            'penunjang' => 'required',
            'sks' => 'required',
            'average_per_sks' => 'required',
        ]);

        $dosen = SdmEkuivalenWaktuMengajarPenuhDosenTetap::find($id);
        $dosen->nama = $req->input('nama');
        $dosen->dtps = $req->input('dtps');
        $dosen->ps_akreditasi = $req->input('ps_akreditasi');
        $dosen->ps_lain_dalam_pt = $req->input('ps_lain_dalam_pt');
        $dosen->ps_lain_luar_pt = $req->input('ps_lain_luar_pt');
        $dosen->penelitian = $req->input('penelitian');
        $dosen->pkm = $req->input('pkm');
        $dosen->penunjang = $req->input('penunjang');
        $dosen->sks = $req->input('sks');
        $dosen->average_per_sks = $req->input('average_per_sks');
        $dosen->tahun_laporan = '2022';
        $dosen->prodi = auth()->user()->prodi;
        $dosen->created_by = auth()->user()->name;
        $dosen->update_at = Carbon::now();
        $dosen->update();

        return redirect('/profil-dosen/ewmp')->with('success', 'SDM EWMP has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap  $sdmEkuivalenWaktuMengajarPenuhDosenTetap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmEkuivalenWaktuMengajarPenuhDosenTetap::find($id)->delete();
        return back()->with('error', 'SDM EWMP has been deleted.');

    }
}
