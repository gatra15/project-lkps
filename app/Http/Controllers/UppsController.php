<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Upps;
use Illuminate\Http\Request;

class UppsController extends Controller
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
        $data = Upps::where($where)->get();

        return ['data' => $data];
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
    public function store(Request $request)
    {
        $tahun = session('tahun_laporan');
        $request->validate([
            'jenis_program' => 'required',
            'program_studi' => 'required',
            'status_peringkat' => 'required',
            'no_sk' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'jumlah_mahasiswa' => 'required',
        ]);

        $data = new Upps;
        $data->jenis_program = $request->input('jenis_program');
        $data->program_studi = $request->input('program_studi');
        $data->status_peringkat = $request->input('status_peringkat');
        $data->no_sk = $request->input('no_sk');
        $data->tanggal_kadaluarsa = $request->input('tanggal_kadaluarsa');
        $data->jumlah_mahasiswa = $request->input('jumlah_mahasiswa');
        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->created_at = Carbon::now();
        $data->created_by = auth()->user()->name;
        $data->save();

        return back()->with('success', 'Data Upps berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upps  $upps
     * @return \Illuminate\Http\Response
     */
    public function show(Upps $upps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upps  $upps
     * @return \Illuminate\Http\Response
     */
    public function edit(Upps $upps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upps  $upps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tahun = session('tahun_laporan');
        $request->validate([
            'jenis_program' => 'required',
            'program_studi' => 'required',
            'status_peringkat' => 'required',
            'no_sk' => 'required',
            'tanggal_kadaluarsa' => 'required',
            'jumlah_mahasiswa' => 'required',
        ]);

        $data = Upps::find($id);
        $data->jenis_program = $request->input('jenis_program');
        $data->program_studi = $request->input('program_studi');
        $data->status_peringkat = $request->input('status_peringkat');
        $data->no_sk = $request->input('no_sk');
        $data->tanggal_kadaluarsa = $request->input('tanggal_kadaluarsa');
        $data->jumlah_mahasiswa = $request->input('jumlah_mahasiswa');
        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();

        return back()->with('success', 'Data Upps berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upps  $upps
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Upps::find($id)->delete();

        return back()->with('success', 'Data Upps berhasil dihapus.');
    }
}
