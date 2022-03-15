<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodi = ProgramStudi::all();
        return view('admin.prodi', [
            'title' => 'Prodi',
            'prodi' => $prodi,
        ]);
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
        $request->validate([
            'name' => 'required'
        ]);

        $data = new ProgramStudi;
        $data->name = $request->input('name');
        $data->created_at = Carbon::now();
        $data->save();

        return redirect()->back()->with('success', 'Data Departemen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramStudi  $programStudi
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramStudi $programStudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramStudi  $programStudi
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramStudi $programStudi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProgramStudi  $programStudi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = ProgramStudi::find($id);
        $data->name = $request->input('name');
        $data->updated_at = Carbon::now();
        $data->update();

        return redirect()->back()->with('success', 'Data Departemen berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramStudi  $programStudi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProgramStudi::find($id)->delete();

        return redirect()->back()->with('error', 'Data Deaprtemen berhasil dihapus.');
    }
}
