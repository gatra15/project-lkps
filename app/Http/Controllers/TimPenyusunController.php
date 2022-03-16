<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\TimPenyusun;
use Illuminate\Http\Request;
use Faker\Provider\ar_SA\Text;
use Illuminate\Support\Facades\DB;

class TimPenyusunController extends Controller
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

        $timPenyusun = TimPenyusun::where($where)->get();
        return [
            'tim' => $timPenyusun,
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
    public function store(Request $request)
    {
        
        $connection = 'mysql';
        $rule = [
            'nama' => 'required',
            'nidn' => 'required',
            'jabatan' => 'required',
            'tanggal_pengisian' => 'required',
            'ttd' => 'image|file|max:2048',
        ];

        $this->validate($request, $rule);
        if($request->file('ttd')) {
            $filenameWithExt = $request->file('ttd')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('ttd')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;
        } else {
            $filenameSimpan = 'Tidak Ada File yang disisipkan';
        }
        try{
            $data = new TimPenyusun;
            $data->nama = $request->input('nama');
            $data->nidn = $request->input('nidn');
            $data->jabatan = $request->input('jabatan');
            $data->tanggal_pengisian = $request->input('tanggal_pengisian');
            $data->ttd = $request->file('ttd')->storeAs('tanda-tangan', $filenameSimpan);
            $data->tahun_laporan = session('tahun_laporan');
            $data->prodi = auth()->user()->prodi->name;
            $data->created_by = auth()->user()->name;
            $data->created_at = Carbon::now();
            $data->save();

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
     * @param  \App\Models\TimPenyusun  $timPenyusun
     * @return \Illuminate\Http\Response
     */
    public function show(TimPenyusun $timPenyusun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimPenyusun  $timPenyusun
     * @return \Illuminate\Http\Response
     */
    public function edit(TimPenyusun $timPenyusun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimPenyusun  $timPenyusun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $connection = 'mysql';
        $rule = [
            'nama' => 'required',
            'nidn' => 'required',
            'jabatan' => 'required',
            'tanggal_pengisian' => 'required',
            'ttd' => 'image|file|max:2048',
        ];

        $this->validate($request, $rule);
        if($request->file('ttd')) {
            $filenameWithExt = $request->file('ttd')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('ttd')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
        } else {
            $filenameSimpan = 'Tidak Ada File yang disisipkan';
        }
        try{
            $data = TimPenyusun::find($id);
            $data->nama = $request->input('nama');
            $data->nidn = $request->input('nidn');
            $data->jabatan = $request->input('jabatan');
            $data->tanggal_pengisian = $request->input('tanggal_pengisian');
            $data->ttd = $request->file('ttd')->storeAs('tanda-tangan', $filenameSimpan);
            $data->tahun_laporan = session('tahun_laporan');
            $data->prodi = auth()->user()->prodi;
            $data->updated_by = auth()->user()->name;
            $data->updated_at = Carbon::now();
            $data->update();

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
     * @param  \App\Models\TimPenyusun  $timPenyusun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $connection = 'mysql';
        try{

            TimPenyusun::find($id)->delete();
            return back()->with('success', 'Data berhasil dihapus.');
            
        } catch(\Exception $ex) {
            DB::connection($connection)->rollBack();
            return response()->json(['message' => $ex->getMessage()], 500);
        } catch(\Throwable $ex) {
            DB::connection($connection)->rollBack();
            return response(['message' => $ex->getMessage()],500);
        }
    }
}
