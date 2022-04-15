<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SdmDosenTidakTetap;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DosenTidakTetapExport;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SdmDosenTidakTetapController extends Controller
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

        $dosenttetap = SdmDosenTidakTetap::where($where)->get();
        $dosenttetap_asesor = SdmDosenTidakTetap::where($where)->where('is_approved',1)->get();
        $ndtt = SdmDosenTidakTetap::where($where)->count('nama');
        $ndtt_asesor = SdmDosenTidakTetap::where($where)->where('is_approved',1)->count('nama');
        return [
            'dosen' => $dosenttetap,
            'dosen_asesor' => $dosenttetap_asesor,
            'ndtt' => $ndtt,
            'ndtt_asesor' => $ndtt_asesor,
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
        $this->validate($req, [
            'nama' => 'required',
            'no_id' => 'required',
            'pendidikan_pasca_sarjana' => 'required',
            'bidang_keahlian' => 'required',
            'jabatan_akademik' => 'required',
            'sertifikat_pendidikan_profesi' => 'required',
            'sertifikat_profesi' => 'required',
            'mata_kuliah_diampu_ps_akreditasi' => 'required',
            'kesesuaian_mata_kuliah_diampu' => 'required',
        ]);

    try{
        $dosen = new SdmDosenTidakTetap;
        $dosen->nama = $req->input('nama');
        $dosen->no_id = $req->input('no_id');
        $dosen->pendidikan_pasca_sarjana = $req->input('pendidikan_pasca_sarjana');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->jabatan_akademik = $req->input('jabatan_akademik');
        $dosen->sertifikat_pendidikan_profesi = $req->input('sertifikat_pendidikan_profesi');
        $dosen->sertifikat_profesi = $req->input('sertifikat_profesi');
        $dosen->mata_kuliah_diampu_ps_akreditasi = $req->input('mata_kuliah_diampu_ps_akreditasi');
        $dosen->kesesuaian_mata_kuliah_diampu = $req->input('kesesuaian_mata_kuliah_diampu');
        $dosen->slug = 'dosen-tidak-tetap';
        $dosen->tahun_laporan = $tahun;
        $dosen->prodi = auth()->user()->prodi->name;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return back()->with('success', 'Data Dosen Tidak Tetap berhasil ditambahkan.');
    } catch (ModelNotFoundException $exception) {
        return back()->withError($exception->getMessage())->withInput();
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function show(SdmDosenTidakTetap $sdmDosenTidakTetap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function edit(SdmDosenTidakTetap $sdmDosenTidakTetap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $tahun = session('tahun_laporan');

        $this->validate($req, [
            'nama' => 'required',
            'no_id' => 'required',
            'pendidikan_pasca_sarjana' => 'required',
            'bidang_keahlian' => 'required',
            'jabatan_akademik' => 'required',
            'sertifikat_pendidikan_profesi' => 'required',
            'sertifikat_profesi' => 'required',
            'mata_kuliah_diampu_ps_akreditasi' => 'required',
            'kesesuaian_mata_kuliah_diampu' => 'required',
        ]);

    try{
        $dosen = SdmDosenTidakTetap::find($id);
        $dosen->nama = $req->input('nama');
        $dosen->no_id = $req->input('no_id');
        $dosen->pendidikan_pasca_sarjana = $req->input('pendidikan_pasca_sarjana');
        $dosen->bidang_keahlian = $req->input('bidang_keahlian');
        $dosen->jabatan_akademik = $req->input('jabatan_akademik');
        $dosen->sertifikat_pendidikan_profesi = $req->input('sertifikat_pendidikan_profesi');
        $dosen->sertifikat_profesi = $req->input('sertifikat_profesi');
        $dosen->mata_kuliah_diampu_ps_akreditasi = $req->input('mata_kuliah_diampu_ps_akreditasi');
        $dosen->kesesuaian_mata_kuliah_diampu = $req->input('kesesuaian_mata_kuliah_diampu');
        $dosen->tahun_laporan = $tahun;
        $dosen->prodi = auth()->user()->prodi->name;
        $dosen->created_by = auth()->user()->name;
        $dosen->created_at = Carbon::now();
        $dosen->save();

        return back()->with('success', 'Data Dosen Tidak Tetap berhasil diubah.');
    } catch (ModelNotFoundException $exception) {
        return back()->withError($exception->getMessage());
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SdmDosenTidakTetap  $sdmDosenTidakTetap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $connection = 'mysql';

    try{
        SdmDosenTidakTetap::find($id)->delete();
        
        return back()->with('success', 'Data Dosen Tidak Tetap berhasil dihapus.');
    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return back()->with('error', $ex->getMessage());
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return back()->with('error', $ex->getMessage());
    }
    }

    public function exportToExcel()
    {
        return Excel::download(new DosenTidakTetapExport, 'dosen-tidak-tetap.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new DosenTidakTetapExport, 'dosen-tidak-tetap.csv');
    }

    public function approve($id)
    {
        $data = SdmDosenTidakTetap::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Tidak Tetap telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }

    public function tolak(Request $req, $id)
    {
        $data = SdmDosenTidakTetap::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
    }
}
