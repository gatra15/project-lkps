<?php

namespace App\Http\Controllers;

use App\Exports\MahasiswaAsingExport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\MahasiswaAsing;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Database\Seeders\MahasiswaSeeder;

class MahasiswaAsingController extends Controller
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
        $where = [
            ['prodi', '=', $prodi],
            ['tahun_laporan', '>=', $tahun],
            ['tahun_laporan', '<=', $tahun],
        ];

        $mahasiswa = MahasiswaAsing::where($where)->get();
        
        $aktif_ts2 = MahasiswaAsing::where($where)->sum('mahasiswa_aktif_ts_2');
        $aktif_ts1 = MahasiswaAsing::where($where)->sum('mahasiswa_aktif_ts_1');
        $aktif_ts = MahasiswaAsing::where($where)->sum('mahasiswa_aktif_ts');
        $full_ts2 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_ft_ts_2');
        $full_ts1 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_ft_ts_1');
        $full_ts = MahasiswaAsing::where($where)->sum('mahasiswa_asing_ft_ts');
        $part_ts2 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_pt_ts_2');
        $part_ts1 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_pt_ts_1');
        $part_ts = MahasiswaAsing::where($where)->sum('mahasiswa_asing_pt_ts');

        return [
            'mahasiswa' => $mahasiswa,
            'aktif_ts2' => $aktif_ts2,
            'aktif_ts1' => $aktif_ts1,
            'aktif_ts' => $aktif_ts,
            'full_ts2' => $full_ts2,
            'full_ts1' => $full_ts1,
            'full_ts' => $full_ts,
            'part_ts2' => $part_ts2,
            'part_ts1' => $part_ts1,
            'part_ts' => $part_ts,
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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
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

    try{
        $data = new MahasiswaAsing;
        $data->program_studi = $request->input('program_studi');
        $data->mahasiswa_aktif_ts_2 = (int) $request->input('mahasiswa_aktif_ts_2');
        $data->mahasiswa_aktif_ts_1 = (int) $request->input('mahasiswa_aktif_ts_1');
        $data->mahasiswa_aktif_ts = (int) $request->input('mahasiswa_aktif_ts');
        $data->mahasiswa_asing_ft_ts_2 = (int) $request->input('mahasiswa_asing_ft_ts_2');
        $data->mahasiswa_asing_ft_ts_1 = (int) $request->input('mahasiswa_asing_ft_ts_1');
        $data->mahasiswa_asing_ft_ts = (int) $request->input('mahasiswa_asing_ft_ts');
        $data->mahasiswa_asing_pt_ts_2 = (int) $request->input('mahasiswa_asing_pt_ts_2');
        $data->mahasiswa_asing_pt_ts_1 = (int) $request->input('mahasiswa_asing_pt_ts_1');
        $data->mahasiswa_asing_pt_ts = (int) $request->input('mahasiswa_asing_pt_ts');
        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->created_by = auth()->user()->name;
        $data->created_at = Carbon::now();
        $data->save();
        // dd($data);

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
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
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

    try{
        $data = MahasiswaAsing::find($id);
        $data->program_studi = $request->input('program_studi');
        $data->mahasiswa_aktif_ts_2 = (int) $request->input('mahasiswa_aktif_ts_2');
        $data->mahasiswa_aktif_ts_1 = (int) $request->input('mahasiswa_aktif_ts_1');
        $data->mahasiswa_aktif_ts = (int) $request->input('mahasiswa_aktif_ts');
        $data->mahasiswa_asing_ft_ts_2 = (int) $request->input('mahasiswa_asing_ft_ts_2');
        $data->mahasiswa_asing_ft_ts_1 = (int) $request->input('mahasiswa_asing_ft_ts_1');
        $data->mahasiswa_asing_ft_ts = (int) $request->input('mahasiswa_asing_ft_ts');
        $data->mahasiswa_asing_pt_ts_2 = (int) $request->input('mahasiswa_asing_pt_ts_2');
        $data->mahasiswa_asing_pt_ts_1 = (int) $request->input('mahasiswa_asing_pt_ts_1');
        $data->mahasiswa_asing_pt_ts = (int) $request->input('mahasiswa_asing_pt_ts');
        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->update();
        // dd($data);

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
     * @param  \App\Models\MahasiswaAsing  $mahasiswaAsing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $connection = 'mysql';

    try{
        MahasiswaAsing::find($id)->delete();
        return back()->with('error', 'Data berhasil dihapus.');
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
        return Excel::download(new MahasiswaAsingExport, 'mahasiswa-asing.xlsx');
    }
    public function exportToCSV()
    {
        return Excel::download(new MahasiswaAsingExport, 'mahasiswa-asing.csv');
    }
}
