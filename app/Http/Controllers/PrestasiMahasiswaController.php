<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\PrestasiMahasiswa;
use Illuminate\Support\Facades\DB;

class PrestasiMahasiswaController extends Controller
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
        $w = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $w1 = ['tahun_laporan' => $tahun-1, 'prodi' => $prodi];
        $w2 = ['tahun_laporan' => $tahun-2, 'prodi' => $prodi];
        $where1 = ['tingkat' => 'Lokal/Wilayah'];
        $where2 = ['tingkat' => 'Nasional'];
        $where3 = ['tingkat' => 'Internasional'];

        $prestasi = PrestasiMahasiswa::where($w)->get();
        $wilayah = PrestasiMahasiswa::where($w)->where($where1)->count();
        $nasional = PrestasiMahasiswa::where($w)->where($where2)->count();
        $internasional = PrestasiMahasiswa::where($w)->where($where3)->count();

        $akademik = [
            'wilayah' => PrestasiMahasiswa::where($w)->where($where1)->where('jenis_prestasi', 'Akademik')->count(),
            'nasional' => PrestasiMahasiswa::where($w)->where($where2)->where('jenis_prestasi', 'Akademik')->count(),
            'internasional' => PrestasiMahasiswa::where($w)->where($where3)->where('jenis_prestasi', 'Akademik')->count(),
        ];
        $nonakademik = [
            'wilayah' => PrestasiMahasiswa::where($w)->where($where1)->where('jenis_prestasi', 'Non Akademik')->count(),
            'nasional' => PrestasiMahasiswa::where($w)->where($where2)->where('jenis_prestasi', 'Non Akademik')->count(),
            'internasional' => PrestasiMahasiswa::where($w)->where($where3)->where('jenis_prestasi', 'Non Akademik')->count(),
        ];

        return [
            'prestasi' => $prestasi,
            'wilayah' => $wilayah,
            'nasional' => $nasional,
            'internasional' => $internasional,
            'akademik' => $akademik,
            'nonakademik' => $nonakademik,
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
        $connection = 'mysql';
        $this->validate($req, [
            'jenis_prestasi' => 'required',
            'nama_kegiatan' => 'required',
            'tahun_perolehan' => 'required',
            'tingkat' => 'required',
            'type_prestasi' => 'required',
        ]);
    try{
        $prestasi = new PrestasiMahasiswa;
        $prestasi->jenis_prestasi = $req->input('jenis_prestasi');
        $prestasi->nama_kegiatan = $req->input('nama_kegiatan');
        $prestasi->tahun_perolehan = $req->input('tahun_perolehan');
        $prestasi->tingkat = $req->input('tingkat');
        $prestasi->type_prestasi = $req->input('type_prestasi');
        $prestasi->tahun_laporan = $tahun;
        $prestasi->prodi = auth()->user()->prodi->name;
        $prestasi->created_by = auth()->user()->name;
        $prestasi->created_at = Carbon::now();
        $prestasi->save();

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }    

        return back()->with('success', 'Prestasi Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(PrestasiMahasiswa $prestasiMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(PrestasiMahasiswa $prestasiMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        $this->validate($req, [
            'jenis_prestasi' => 'required',
            'nama_kegiatan' => 'required',
            'tahun_perolehan' => 'required',
            'tingkat' => 'required',
            'type_prestasi' => 'required',
        ]);
    try {
        $prestasi = PrestasiMahasiswa::find($id);
        $prestasi->jenis_prestasi = $req->input('jenis_prestasi');
        $prestasi->nama_kegiatan = $req->input('nama_kegiatan');
        $prestasi->tahun_perolehan = $req->input('tahun_perolehan');
        $prestasi->tingkat = $req->input('tingkat');
        $prestasi->type_prestasi = $req->input('type_prestasi');
        $prestasi->tahun_laporan = $tahun;
        $prestasi->prodi = auth()->user()->prodi->name;
        $prestasi->updated_by = auth()->user()->name;
        $prestasi->updated_at = Carbon::now();
        $prestasi->update();

        return back()->with('success', 'Prestasi Mahasiswa berhasil diubah.');
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
     * @param  \App\Models\PrestasiMahasiswa  $prestasiMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $connection = 'mysql';
    try{

        PrestasiMahasiswa::find($id)->delete();
        return back()->with('error', 'Prestasi Mahasiswa berhasil dihapus.');

    } catch(\Exception $ex) {
        DB::connection($connection)->rollBack();
        return response()->json(['message' => $ex->getMessage()], 500);
    } catch(\Throwable $ex) {
        DB::connection($connection)->rollBack();
        return response(['message' => $ex->getMessage()],500);
    }    
    }

    public function approve($id)
    {
        $data = PrestasiMahasiswa::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Luaran Prestasi Mahasiswa telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Luaran Prestasi Mahasiswa berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = PrestasiMahasiswa::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Luaran Prestasi Mahasiswa berhasil ditolak.');
    }
}
