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
            ['tahun_laporan', '<=', $tahun],
            // ['tahun_laporan', '<=', $tahun-2],
        ];

        $a = $tahun;
        $b = $tahun-1;
        $c = $tahun-2;
        
        $mahasiswa  = MahasiswaAsing::where($where)->get();
        // dd($mahasiswa);

        // $mahasiswa = json_decode(json_encode($mahasiswa),true); 
        // dd($mahasiswa);

        // dd($mahasiswa);
        // $aktif_ts2 = MahasiswaAsing::where($where)->sum('mahasiswa_aktif_ts_2');
        // $aktif_ts1 = MahasiswaAsing::where($where)->sum('mahasiswa_aktif_ts_1');
        // $aktif_ts = MahasiswaAsing::where($where)->sum('mahasiswa_aktif_ts');
        // $full_ts2 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_ft_ts_2');
        // $full_ts1 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_ft_ts_1');
        // $full_ts = MahasiswaAsing::where($where)->sum('mahasiswa_asing_ft_ts');
        // $part_ts2 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_pt_ts_2');
        // $part_ts1 = MahasiswaAsing::where($where)->sum('mahasiswa_asing_pt_ts_1');
        // $part_ts = MahasiswaAsing::where($where)->sum('mahasiswa_asing_pt_ts');

        return [
            'mahasiswa' => $mahasiswa,
            // 'aktif_ts2' => $aktif_ts2,
            // 'aktif_ts1' => $aktif_ts1,
            // 'aktif_ts' => $aktif_ts,
            // 'full_ts2' => $full_ts2,
            // 'full_ts1' => $full_ts1,
            // 'full_ts' => $full_ts,
            // 'part_ts2' => $part_ts2,
            // 'part_ts1' => $part_ts1,
            // 'part_ts' => $part_ts,
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
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $connection = 'mysql';
        $rule = [
            // 'mahasiswa.*' => 'required'
        ];
        $this->validate($request, $rule);

       
        // $prodi = $request->input('program_studi');
        // $aktif = $request->input('mahasiswa_aktif');
        // $asing_pt = $request->input('mahasiswa_asing_pt');
        // $asing_ft = $request->input('mahasiswa_asing_ft');
        
        //     $mahasiswa = [
        //        'mahasiswa_aktif_ts' => $aktif,
        //        'mahasiswa_asing_pt_ts' => $asing_pt,
        //        'mahasiswa_asing_ft_ts' => $asing_ft
        //     ];

        //     $param = ['2','1',''];

        // $basket  = [];
        // $build   = [];

        // $counter = 0;

        // foreach ($mahasiswa as $key => $value) {

        //     foreach ($value as $key1 => $value1) {
        //         $build[$key.$param[$key1]]= $value1;
        //     }

        //     $counter++;
        // }

        // array_push($basket,$build);


         
        
        try{
            $data = new MahasiswaAsing();
            $data->program_studi = $request->input('program_studi');
            $data->mahasiswa_aktif_ts2 = (int) $request->input('mahasiswa_aktif_ts');
            $data->mahasiswa_aktif_ts1 = (int) $request->input('mahasiswa_aktif_ts1');
            $data->mahasiswa_aktif_ts = (int) $request->input('mahasiswa_aktif_ts');
            $data->mahasiswa_asing_ft_ts2 = (int) $request->input('mahasiswa_asing_ft_ts2');
            $data->mahasiswa_asing_ft_ts1 = (int) $request->input('mahasiswa_asing_ft_ts1');
            $data->mahasiswa_asing_ft_ts = (int) $request->input('mahasiswa_asing_ft_ts');
            $data->mahasiswa_asing_pt_ts2 = (int) $request->input('mahasiswa_asing_pt_ts2');
            $data->mahasiswa_asing_pt_ts1 = (int) $request->input('mahasiswa_asing_pt_ts1');
            $data->mahasiswa_asing_pt_ts = (int) $request->input('mahasiswa_asing_pt_ts');
            $data->tahun_laporan = $tahun;
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
    public function edit()
    {
        $tahun = session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = [
            ['prodi', '=', $prodi],
            ['tahun_laporan', '<=', $tahun],
            // ['tahun_laporan', '<=', $tahun-2],
        ];
        $id = [2,3,4];
        $mahasiswa = $data = MahasiswaAsing::whereIn('id', $id)->get();

        // dd($mahasiswa);

        return ['mahasiswa' => $mahasiswa];
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
        ddd($request);
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        // $rule = [
        //     'program_studi',
        //     'mahasiswa_aktif_ts',
        //     'mahasiswa_asing_ft_ts',
        //     'mahasiswa_asing_pt_ts',
        // ];
        // $this->validate($request, $rule);
        $mahasiswa_aktif = $request->input('mahasiswa_aktif');
        $mahasiswa_asing_ft_ts = $request->input('mahasiswa_asing_ft_ts');
        $mahasiswa_asing_pt_ts = $request->input('mahasiswa_asing_pt_ts');

    try{
        $data = MahasiswaAsing::find($id);
        $data->program_studi = 'S1 Teknik Industri';
        $data->mahasiswa_aktif_ts = (int) $request->input('mahasiswa_aktif_ts');
        $data->mahasiswa_asing_ft_ts = (int) $request->input('mahasiswa_asing_ft_ts');
        $data->mahasiswa_asing_pt_ts = (int) $request->input('mahasiswa_asing_pt_ts');
        $data->tahun_laporan = $tahun;
        $data->prodi = auth()->user()->prodi->name;
        $data->updated_by = auth()->user()->name;
        $data->updated_at = Carbon::now();
        $data->save();
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
