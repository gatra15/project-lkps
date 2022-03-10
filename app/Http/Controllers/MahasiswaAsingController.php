<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\MahasiswaAsing;

class MahasiswaAsingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $rule = [
            'program_studi',
            'mahasiswa_aktif_ts_2',
            'mahasiswa_aktif_ts_1',
            'mahasiswa_aktif_ts',
            'mahasiswa_asing_ft_ts_2',
            'mahasiswa_asing_ft_ts_1',
            'mahasiswa_asing_ft_ts',
            'mahasiswa_asing_pt_ts_2',
            'mahasiswa_asing_pt_ts_1',
            'mahasiswa_asing_pt_ts',
        ];
        $this->validate($request, $rule);

        $data = new MahasiswaAsing;
        $data->program_studi = $request->input('program_studi');
        $data->mahasiswa_aktif_ts_2 = $request->input('mahasiswa_aktif_ts_2');
        $data->mahasiswa_aktif_ts_1 = $request->input('mahasiswa_aktif_ts_1');
        $data->mahasiswa_aktif_ts = $request->input('mahasiswa_aktif_ts');
        $data->mahasiswa_asing_ft_ts_2 = $request->input('mahasiswa_asing_ft_ts_2');
        $data->mahasiswa_asing_ft_ts_1 = $request->input('mahasiswa_asing_ft_ts_1');
        $data->mahasiswa_asing_ft_ts = $request->input('mahasiswa_asing_ft_ts');
        $data->mahasiswa_asing_pt_ts_2 = $request->input('mahasiswa_asing_pt_ts_2');
        $data->mahasiswa_asing_pt_ts_1 = $request->input('mahasiswa_asing_pt_ts_1');
        $data->mahasiswa_asing_pt_ts = $request->input('mahasiswa_asing_pt_ts');
        $data->tahun_laporan = '2022';
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->save();
        // dd($data);

        return back()->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaAsing  $mahasiswaAsing
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaAsing $mahasiswaAsing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaAsing  $mahasiswaAsing
     * @return \Illuminate\Http\Response
     */
    public function edit(MahasiswaAsing $mahasiswaAsing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaAsing  $mahasiswaAsing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rule = [
            'program_studi',
            'mahasiswa_aktif_ts_2',
            'mahasiswa_aktif_ts_1',
            'mahasiswa_aktif_ts',
            'mahasiswa_asing_ft_ts_2',
            'mahasiswa_asing_ft_ts_1',
            'mahasiswa_asing_ft_ts',
            'mahasiswa_asing_pt_ts_2',
            'mahasiswa_asing_pt_ts_1',
            'mahasiswa_asing_pt_ts',
        ];
        $this->validate($request, $rule);

        $data = MahasiswaAsing::find($id);
        $data->program_studi = $request->input('program_studi');
        $data->mahasiswa_aktif_ts_2 = $request->input('mahasiswa_aktif_ts_2');
        $data->mahasiswa_aktif_ts_1 = $request->input('mahasiswa_aktif_ts_1');
        $data->mahasiswa_aktif_ts = $request->input('mahasiswa_aktif_ts');
        $data->mahasiswa_asing_ft_ts_2 = $request->input('mahasiswa_asing_ft_ts_2');
        $data->mahasiswa_asing_ft_ts_1 = $request->input('mahasiswa_asing_ft_ts_1');
        $data->mahasiswa_asing_ft_ts = $request->input('mahasiswa_asing_ft_ts');
        $data->mahasiswa_asing_pt_ts_2 = $request->input('mahasiswa_asing_pt_ts_2');
        $data->mahasiswa_asing_pt_ts_1 = $request->input('mahasiswa_asing_pt_ts_1');
        $data->mahasiswa_asing_pt_ts = $request->input('mahasiswa_asing_pt_ts');
        $data->tahun_laporan = '2022';
        $data->prodi = auth()->user()->prodi;
        $data->created_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();
        // dd($data);

        return back()->with('success', 'Data berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaAsing  $mahasiswaAsing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MahasiswaAsing::find($id)->delete();
        return back()->with('error', 'Data berhasil dihapus.');
    }
}
