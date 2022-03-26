<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LembarEvaluasiDiri;

class LembarEvaluasiDiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LembarEvaluasiDiri::all();
        return $data;
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
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $request->validate([
        ]);

        if($request->file('attachment')) {
            $filenameWithExt = $request->file('attachment')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('attachment')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
        } else {
            
        }
        $data = new LembarEvaluasiDiri;
        $data->attachment = $request->file('attachment')->storeAs('/lembar-evaluasi-diri', $filenameSimpan);
        $data->tahun_laporan = $tahun;
        $data->prodi = $prodi;
        $data->created_at = Carbon::now();
        $data->created_by = auth()->user()->name;
        $data->save(); 
        return back()->with('success', 'Data Lembar Evaluasi Diri berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LembarEvaluasiDiri  $lembarEvaluasiDiri
     * @return \Illuminate\Http\Response
     */
    public function show(LembarEvaluasiDiri $lembarEvaluasiDiri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LembarEvaluasiDiri  $lembarEvaluasiDiri
     * @return \Illuminate\Http\Response
     */
    public function edit(LembarEvaluasiDiri $lembarEvaluasiDiri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LembarEvaluasiDiri  $lembarEvaluasiDiri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $request->validate([
            'attachment' => 'file|max:10240'
        ]);

        $data = LembarEvaluasiDiri::find($id);
        if($request->file('attachment')) {
            $filenameWithExt = $request->file('attachment')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('attachment')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
            $data->attachment = $request->file('attachment')->storeAs('/lembar-evaluasi-diri', $filenameSimpan);
        } else {
            
        }
        $data->tahun_laporan = $tahun;
        $data->prodi = $prodi;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LembarEvaluasiDiri  $lembarEvaluasiDiri
     * @return \Illuminate\Http\Response
     */
    public function destroy(LembarEvaluasiDiri $lembarEvaluasiDiri)
    {
        //
    }
}
