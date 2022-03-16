<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Exports\DosenEwmpExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
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
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];

        $dosen = SdmEkuivalenWaktuMengajarPenuhDosenTetap::where($where)->get();

        $where1 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'dtps' => 0, 'dtps' => 1];
        $where2 = ['tahun_laporan' => $tahun, 'prodi' => $prodi, 'dtps' => 1];
        // dt
        $dt = SdmEkuivalenWaktuMengajarPenuhDosenTetap::where($where1)->count();
        $average_dt_jumlah = SdmEkuivalenWaktuMengajarPenuhDosenTetap::where($where1)->avg('sks');
        $average_dt_average = SdmEkuivalenWaktuMengajarPenuhDosenTetap::where($where1)->avg('average_per_sks');

        // dtps
        $dtps = SdmEkuivalenWaktuMengajarPenuhDosenTetap::where($where2)->count();
        $average_dtps_jumlah = SdmEkuivalenWaktuMengajarPenuhDosenTetap::where($where2)->avg('sks');
        $average_dtps_average = SdmEkuivalenWaktuMengajarPenuhDosenTetap::where($where2)->avg('average_per_sks');
        return [
            'dosen' => $dosen,
            'dt' => $dt,
            'average_dt_jumlah' => $average_dt_jumlah,
            'average_dt_average' => $average_dt_average,
            'dtps' => $dtps,
            'average_dtps_jumlah' => $average_dtps_jumlah,
            'average_dtps_average' => $average_dtps_average,
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
        $connection  = 'mysql';
        $this->validate($req, [
            'nama' => 'required',
            'dtps' => 'required',
            'ps_akreditasi' => 'integer|required',
            'ps_lain_dalam_pt' => 'integer|required',
            'ps_lain_luar_pt' => 'integer|required',
            'penelitian' => 'integer|required',
            'pkm' => 'integer|required',
            'penunjang' => 'integer|required',
        ]);

    try{
        $dosen = new SdmEkuivalenWaktuMengajarPenuhDosenTetap;
        $dosen->nama = $req->input('nama');
        $dosen->dtps = $req->input('dtps');
        $dosen->ps_akreditasi = (int) $req->input('ps_akreditasi');
        $dosen->ps_lain_dalam_pt = (int) $req->input('ps_lain_dalam_pt');
        $dosen->ps_lain_luar_pt = (int) $req->input('ps_lain_luar_pt');
        $dosen->penelitian = (int) $req->input('penelitian');
        $dosen->pkm = (int) $req->input('pkm');
        $dosen->penunjang = (int) $req->input('penunjang');
        $dosen->sks = (int) ($dosen->ps_akreditasi + $dosen->ps_lain_dalam_pt + $dosen->ps_lain_luar_pt + $dosen->penelitian + $dosen->pkm + $dosen->penunjang);
        $dosen->average_per_sks = (float) $dosen->sks / 6;
        $dosen->slug = 'dosen-ewmp';
        $dosen->tahun_laporan = $tahun;
        $dosen->prodi = auth()->user()->prodi->name;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        // ddd($dosen);
        $dosen->save();

        return back()->with('success', 'Data berhasil ditambahkan.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'nama' => 'required',
            'dtps' => 'required',
            'ps_akreditasi' => 'integer|required',
            'ps_lain_dalam_pt' => 'integer|required',
            'ps_lain_luar_pt' => 'integer|required',
            'penelitian' => 'integer|required',
            'pkm' => 'integer|required',
            'penunjang' => 'integer|required',
        ]);

    try{
        $dosen = SdmEkuivalenWaktuMengajarPenuhDosenTetap::find($id);
        $dosen->nama = $req->input('nama');
        $dosen->dtps = $req->input('dtps');
        $dosen->ps_akreditasi = (int) $req->input('ps_akreditasi');
        $dosen->ps_lain_dalam_pt = (int) $req->input('ps_lain_dalam_pt');
        $dosen->ps_lain_luar_pt = (int) $req->input('ps_lain_luar_pt');
        $dosen->penelitian = (int) $req->input('penelitian');
        $dosen->pkm = (int) $req->input('pkm');
        $dosen->penunjang = (int) $req->input('penunjang');
        $dosen->sks = (int) ($dosen->ps_akreditasi + $dosen->ps_lain_dalam_pt + $dosen->ps_lain_luar_pt + $dosen->penelitian + $dosen->pkm + $dosen->penunjang);
        $dosen->average_per_sks = (float) $dosen->sks / 6;
        $dosen->slug = 'dosen-ewmp';
        $dosen->tahun_laporan = $tahun;
        $dosen->prodi = auth()->user()->prodi->name;
        $dosen->updated_by = auth()->user()->name;
        $dosen->updated_at = Carbon::now();
        $dosen->update();

        return back()->with('success', 'Data berhasil diubah.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap  $sdmEkuivalenWaktuMengajarPenuhDosenTetap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $connection = 'mysql';

    try{

        SdmEkuivalenWaktuMengajarPenuhDosenTetap::find($id)->delete();
        
        return back()->with('success', 'Data berhasil diubah.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }

    }

    public function exportToExcel()
    {
        return Excel::download(new DosenEwmpExport, 'ewmp-dosen.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new DosenEwmpExport, 'ewmp-dosen.csv');
    }
}
