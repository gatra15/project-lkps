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
        $data_asesor = SdmKinerjaDosenLuaranPkmDtps::with('jenis')->where($where)->where('is_approved', 1)->get();
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
            'data_asesor' => $data_asesor,
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
        $tahun = session('tahun_laporan');
        // $this->validate($req, [
        //     'judul' => 'required',
        //     'tahun' => 'required',
        //     'keterangan' => 'required',
        //     'bukti' => 'file|max:4096',
        // ]);

        

        $luaran = new SdmKinerjaDosenLuaranPkmDtps;
        $luaran->type_luaran = $req->input('type_luaran');
        $luaran->judul = $req->input('judul');
        $luaran->tahun = $req->input('tahun');
        $luaran->keterangan = $req->input('keterangan');
        if($req->file('bukti')) {
            $filenameWithExt = $req->file('bukti')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('bukti')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
            $luaran->bukti = $req->file('bukti')->storeAs('/bukti-kinerjaDosen', $filenameSimpan);

        } else {
        }
        $luaran->tahun_laporan = $tahun;
        $luaran->prodi = auth()->user()->prodi->name;
        $luaran->created_by = auth()->user()->name;
        $luaran->created_at = Carbon::now();
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
            'bukti' => 'file|max:4096',
        ]);

        if($req->file('bukti')) {
            $filenameWithExt = $req->file('bukti')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('bukti')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
        } else {
            $filenameSimpan = 'Tidak Ada File yang disisipkan';
        }

        $luaran = SdmKinerjaDosenLuaranPkmDtps::find($id);
        $luaran->type_luaran = $req->input('type_luaran');
        $luaran->judul = $req->input('judul');
        $luaran->tahun = $req->input('tahun');
        $luaran->keterangan = $req->input('keterangan');
        $luaran->bukti = $req->file('bukti')->storeAs('/bukti-kinerjaDosen', $filenameSimpan);
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

    public function approve($id)
    {
        $data = SdmKinerjaDosenLuaranPkmDtps::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Kinerja Dosen Luaran PKM Dtps telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }

    public function tolak(Request $req, $id)
    {
        $data = SdmKinerjaDosenLuaranPkmDtps::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }
}
