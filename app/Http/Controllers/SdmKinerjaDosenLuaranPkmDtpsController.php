<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\LuaranPkmDtpsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\SdmKinerjaDosenLuaranPkmDtps;
use App\Models\SdmKinerjaDosenPkmDtps;

class SdmKinerjaDosenLuaranPkmDtpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];

        $data = SdmKinerjaDosenLuaranPkmDtps::with('jenis')->where($where)->get();
        $where1 = ['tahun_laporan' => $tahun, 'type_luaran' => 'I', 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun, 'type_luaran' => 'II', 'prodi' => $prodi];
        $where3 = ['tahun_laporan' => $tahun, 'type_luaran' => 'III', 'prodi' => $prodi];
        $where4 = ['tahun_laporan' => $tahun, 'type_luaran' => 'IV', 'prodi' => $prodi];

        $na = SdmKinerjaDosenLuaranPkmDtps::where($where1)->count('tahun');
        $nb = SdmKinerjaDosenLuaranPkmDtps::where($where2)->count('tahun');
        $nc = SdmKinerjaDosenLuaranPkmDtps::where($where3)->count('tahun');
        $nd = SdmKinerjaDosenLuaranPkmDtps::where($where4)->count('tahun');
        return [
            'data' => $data,
            'na' => $na,
            'nb' => $nb,
            'nc' => $nc,
            'nd' => $nd,
        ];

        
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
        // ddd($req);
        $tahun = session('tahun_laporan');
        $this->validate($req, [
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);

        $luaran = new SdmKinerjaDosenLuaranPkmDtps;
        $luaran->type_luaran = $req->input('type_luaran');
        $luaran->judul = $req->input('judul');
        $luaran->tahun = $req->input('tahun');
        $luaran->keterangan = $req->input('keterangan');
        $luaran->tahun_laporan = $tahun;
        $luaran->prodi = auth()->user()->prodi->name;
        $luaran->created_by = auth()->user()->name;
        $luaran->created_at = Carbon::now();
        // dd($luaran);
        $luaran->save();

        return back()->with('success', 'Data Sdm Kinerja Dosen Luaran Pkm Dtps berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function show(SdmKinerjaDosenLuaranPkmDtps $sdmKinerjaDosenLuaranPkmDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmKinerjaDosenLuaranPkmDtps $sdmKinerjaDosenLuaranPkmDtps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $tahun = session('tahun_laporan');
        $this->validate($req, [
            'type_luaran' => 'required',
            'judul' => 'required',
            'tahun' => 'required',
            'keterangan' => 'required',
        ]);

        $luaran = SdmKinerjaDosenLuaranPkmDtps::find($id);
        $luaran->type_luaran = $req->input('type_luaran');
        $luaran->judul = $req->input('judul');
        $luaran->tahun = $req->input('tahun');
        $luaran->keterangan = $req->input('keterangan');
        $luaran->tahun_laporan = $tahun;
        $luaran->prodi = auth()->user()->prodi->name;
        $luaran->created_by = auth()->user()->name;
        $luaran->updated_at = Carbon::now();
        $luaran->update();

        return back()->with('success', 'Data Sdm Kinerja Dosen Luaran Pkm Dtps berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmKinerjaDosenLuaranPkmDtps  $sdmKinerjaDosenLuaranPkmDtps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SdmKinerjaDosenLuaranPkmDtps::find($id)->delete();
        return back()->with('error', 'Data Sdm Kinerja Dosen Luaran Pkm Dtps berhasil dihapus.');
    }

    public function exportToExcel()
    {
        return Excel::download(new LuaranPkmDtpsExport, 'luaran-pkm-dtps.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new LuaranPkmDtpsExport, 'luaran-pkm-dtps.csv');
    }
}
