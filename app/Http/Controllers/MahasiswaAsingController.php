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
        $tahun = (int) session('tahun_laporan');
        $prodi = session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name;
        $where = ['tahun_laporan' => $tahun, 'prodi' => $prodi];
        $where1 = ['tahun_laporan' => $tahun -1, 'prodi' => $prodi];
        $where2 = ['tahun_laporan' => $tahun -2, 'prodi' => $prodi];

        $cek = MahasiswaAsing::where($where)->exists();
        $cek1 = MahasiswaAsing::where($where1)->exists();
        $cek2 = MahasiswaAsing::where($where2)->exists();
        // dd($cek);
        if(!$cek2){
            MahasiswaAsing::create([
                'program_studi' => 'S1 '.$prodi,
                'tahun_laporan' => $tahun - 2,
                'prodi' => $prodi
            ]);
        } 
        if (!$cek1) {
            MahasiswaAsing::create([
                'program_studi' => 'S1 '.$prodi,
                'tahun_laporan' => $tahun - 1,
                'prodi' => $prodi
            ]);
        }
        if (!$cek) {
            MahasiswaAsing::create([
                'program_studi' => 'S1 '.$prodi,
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }

        $a = $tahun;
        $b = $tahun-1;
        $c = $tahun-2;
        
        $mahasiswa  = DB::select(DB::raw("
        
        SELECT A.id as id, A.is_approved as is_approved, A.mahasiswa_aktif_ts, B.mahasiswa_aktif_ts AS mahasiswa_aktif_ts1, C.mahasiswa_aktif_ts AS mahasiswa_aktif_ts2,
        A.mahasiswa_asing_pt_ts, B.mahasiswa_asing_pt_ts AS mahasiswa_asing_pt_ts1, C.mahasiswa_asing_pt_ts AS mahasiswa_asing_pt_ts2,
        A.mahasiswa_asing_ft_ts, B.mahasiswa_asing_ft_ts AS mahasiswa_asing_ft_ts1, C.mahasiswa_asing_ft_ts AS mahasiswa_asing_ft_ts2
         FROM (
        
        SELECT
        sum(ma.id) AS id,
        sum(ma.is_approved) AS is_approved,
        sum(ma.program_studi) AS program_studi,
        sum(ma.mahasiswa_aktif_ts) AS mahasiswa_aktif_ts,
        sum(ma.mahasiswa_asing_ft_ts) AS mahasiswa_asing_ft_ts,
        sum(ma.mahasiswa_asing_pt_ts) AS mahasiswa_asing_pt_ts
         FROM mahasiswa_asings ma WHERE tahun_laporan = $a
         
        GROUP BY 
        ma.program_studi) AS A LEFT JOIN (
        
        SELECT 
        sum(ma_1.id) AS id,
        sum(ma_1.is_approved) AS is_approved,
        sum(ma_1.program_studi) AS program_studi,
        sum(ma_1.mahasiswa_aktif_ts) AS mahasiswa_aktif_ts,
        sum(ma_1.mahasiswa_asing_ft_ts) AS mahasiswa_asing_ft_ts,
        sum(ma_1.mahasiswa_asing_pt_ts) AS mahasiswa_asing_pt_ts
        FROM mahasiswa_asings ma_1 WHERE tahun_laporan = $b
         
        GROUP BY 
        ma_1.program_studi) AS B ON A.program_studi = B.program_studi LEFT JOIN (
        
        SELECT 
        sum(ma_2.id) AS id,
        sum(ma_2.is_approved) AS is_approved,
        sum(ma_2.program_studi) AS program_studi,
        sum(ma_2.mahasiswa_aktif_ts) AS mahasiswa_aktif_ts,
        sum(ma_2.mahasiswa_asing_ft_ts) AS mahasiswa_asing_ft_ts,
        sum(ma_2.mahasiswa_asing_pt_ts) AS mahasiswa_asing_pt_ts
        FROM mahasiswa_asings ma_2 WHERE tahun_laporan = $c
         
        GROUP BY 
        ma_2.program_studi) AS C ON A.program_studi = C.program_studi;
        
        "));

        $mahasiswa_asesor  = DB::select(DB::raw("
        
        SELECT A.id as id, A.is_approved as is_approved, A.mahasiswa_aktif_ts, B.mahasiswa_aktif_ts AS mahasiswa_aktif_ts1, C.mahasiswa_aktif_ts AS mahasiswa_aktif_ts2,
        A.mahasiswa_asing_pt_ts, B.mahasiswa_asing_pt_ts AS mahasiswa_asing_pt_ts1, C.mahasiswa_asing_pt_ts AS mahasiswa_asing_pt_ts2,
        A.mahasiswa_asing_ft_ts, B.mahasiswa_asing_ft_ts AS mahasiswa_asing_ft_ts1, C.mahasiswa_asing_ft_ts AS mahasiswa_asing_ft_ts2
         FROM (
        
        SELECT
        sum(ma.id) AS id,
        sum(ma.is_approved) AS is_approved,
        sum(ma.program_studi) AS program_studi,
        sum(ma.mahasiswa_aktif_ts) AS mahasiswa_aktif_ts,
        sum(ma.mahasiswa_asing_ft_ts) AS mahasiswa_asing_ft_ts,
        sum(ma.mahasiswa_asing_pt_ts) AS mahasiswa_asing_pt_ts
         FROM mahasiswa_asings ma WHERE tahun_laporan = $a AND is_approved = 1
         
        GROUP BY 
        ma.program_studi) AS A LEFT JOIN (
        
        SELECT 
        sum(ma_1.id) AS id,
        sum(ma_1.is_approved) AS is_approved,
        sum(ma_1.program_studi) AS program_studi,
        sum(ma_1.mahasiswa_aktif_ts) AS mahasiswa_aktif_ts,
        sum(ma_1.mahasiswa_asing_ft_ts) AS mahasiswa_asing_ft_ts,
        sum(ma_1.mahasiswa_asing_pt_ts) AS mahasiswa_asing_pt_ts
        FROM mahasiswa_asings ma_1 WHERE tahun_laporan = $b AND is_approved = 1
         
        GROUP BY 
        ma_1.program_studi) AS B ON A.program_studi = B.program_studi LEFT JOIN (
        
        SELECT 
        sum(ma_2.id) AS id,
        sum(ma_2.is_approved) AS is_approved,
        sum(ma_2.program_studi) AS program_studi,
        sum(ma_2.mahasiswa_aktif_ts) AS mahasiswa_aktif_ts,
        sum(ma_2.mahasiswa_asing_ft_ts) AS mahasiswa_asing_ft_ts,
        sum(ma_2.mahasiswa_asing_pt_ts) AS mahasiswa_asing_pt_ts
        FROM mahasiswa_asings ma_2 WHERE tahun_laporan = $c AND is_approved = 1
         
        GROUP BY 
        ma_2.program_studi) AS C ON A.program_studi = C.program_studi;
        
        "));
        // dd($mahasiswa);

        $mahasiswa = json_decode(json_encode($mahasiswa),true); 
        $mahasiswa_asesor = json_decode(json_encode($mahasiswa_asesor),true); 
        // dd($mahasiswa);

        // dd($mahasiswa);
        $aktif_ts2 = MahasiswaAsing::where($where2)->sum('mahasiswa_aktif_ts');
        $aktif_ts2_asesor = MahasiswaAsing::where($where2)->where('is_approved',1)->sum('mahasiswa_aktif_ts');
        $aktif_ts1 = MahasiswaAsing::where($where1)->sum('mahasiswa_aktif_ts');
        $aktif_ts1_asesor = MahasiswaAsing::where($where1)->where('is_approved',1)->sum('mahasiswa_aktif_ts');
        $aktif_ts = MahasiswaAsing::where($where)->sum('mahasiswa_aktif_ts');
        $aktif_ts_asesor = MahasiswaAsing::where($where)->where('is_approved',1)->sum('mahasiswa_aktif_ts');
        $full_ts2 = MahasiswaAsing::where($where2)->sum('mahasiswa_asing_ft_ts');
        $full_ts2_asesor = MahasiswaAsing::where($where2)->where('is_approved',1)->sum('mahasiswa_asing_ft_ts');
        $full_ts1 = MahasiswaAsing::where($where1)->sum('mahasiswa_asing_ft_ts');
        $full_ts1_asesor = MahasiswaAsing::where($where1)->where('is_approved',1)->sum('mahasiswa_asing_ft_ts');
        $full_ts = MahasiswaAsing::where($where)->sum('mahasiswa_asing_ft_ts');
        $full_ts_asesor = MahasiswaAsing::where($where)->where('is_approved',1)->sum('mahasiswa_asing_ft_ts');
        $part_ts2 = MahasiswaAsing::where($where2)->sum('mahasiswa_asing_pt_ts');
        $part_ts2_asesor = MahasiswaAsing::where($where2)->where('is_approved',1)->sum('mahasiswa_asing_pt_ts');
        $part_ts1 = MahasiswaAsing::where($where1)->sum('mahasiswa_asing_pt_ts');
        $part_ts1_asesor = MahasiswaAsing::where($where1)->where('is_approved',1)->sum('mahasiswa_asing_pt_ts');
        $part_ts = MahasiswaAsing::where($where)->sum('mahasiswa_asing_pt_ts');
        $part_ts_asesor = MahasiswaAsing::where($where)->where('is_approved',1)->sum('mahasiswa_asing_pt_ts');
        $jumlah = $full_ts + $full_ts1 + $full_ts2 + $part_ts + $part_ts1 + $part_ts2;
        $jumlahMhs = $aktif_ts + $aktif_ts1 + $aktif_ts2;

        return [
            'mahasiswa' => $mahasiswa,
            'mahasiswa_asesor' => $mahasiswa_asesor,
            'aktif_ts2' => $aktif_ts2,
            'aktif_ts2_asesor' => $aktif_ts2_asesor,
            'aktif_ts1' => $aktif_ts1,
            'aktif_ts1_asesor' => $aktif_ts1_asesor,
            'aktif_ts' => $aktif_ts,
            'aktif_ts_asesor' => $aktif_ts_asesor,
            'full_ts2' => $full_ts2,
            'full_ts2_asesor' => $full_ts2_asesor,
            'full_ts1' => $full_ts1,
            'full_ts1_asesor' => $full_ts1_asesor,
            'full_ts' => $full_ts,
            'full_ts_asesor' => $full_ts_asesor,
            'part_ts2' => $part_ts2,
            'part_ts2_asesor' => $part_ts2_asesor,
            'part_ts1' => $part_ts1,
            'part_ts1_asesor' => $part_ts1_asesor,
            'part_ts' => $part_ts,
            'part_ts_asesor' => $part_ts_asesor,
            'jumlah' => $jumlah,
            'jumlahMhs' => $jumlahMhs,
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
        // dd($request);
        $tahun = session('tahun_laporan');
        $connection = 'mysql';
        // $rule = [
        //     'program_studi',
        //     'mahasiswa_aktif_ts',
        //     'mahasiswa_asing_ft_ts',
        //     'mahasiswa_asing_pt_ts',
        // ];
        // $this->validate($request, $rule);
        // $mahasiswa = $request->input('mahasiswa');
    try{
        $value = [
            'program_studi' => $request->input('program_studi'),
            'mahasiswa_aktif_ts' => $request->input('mahasiswa_aktif_ts2'),
            'mahasiswa_asing_pt_ts' => $request->input('mahasiswa_asing_pt_ts2'),
            'mahasiswa_asing_ft_ts' => $request->input('mahasiswa_asing_ft_ts2'),
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now()
        ];
        MahasiswaAsing::find($id-2)->update($value);
        $value = [
            'program_studi' => $request->input('program_studi'),
            'mahasiswa_aktif_ts' => $request->input('mahasiswa_aktif_ts1'),
            'mahasiswa_asing_pt_ts' => $request->input('mahasiswa_asing_pt_ts1'),
            'mahasiswa_asing_ft_ts' => $request->input('mahasiswa_asing_ft_ts1'),
            'created_by' => auth()->user()->name,
            'created_at' => Carbon::now()
        ];
        MahasiswaAsing::find($id-1)->update($value);
        $value = [
            'program_studi' => $request->input('program_studi'),
            'mahasiswa_aktif_ts' => $request->input('mahasiswa_aktif_ts'),
            'mahasiswa_asing_pt_ts' => $request->input('mahasiswa_asing_pt_ts'),
            'mahasiswa_asing_ft_ts' => $request->input('mahasiswa_asing_ft_ts'),
            
        ];
        MahasiswaAsing::find($id)->update($value);

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

    public function approve($id)
    {
        $data = MahasiswaAsing::find($id);
        $data->is_approved = true;
        $data->comment = 'Data Mahasiswa Asing telah disetujui.';
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Mahasiswa Asing berhasil disetujui.');
    }

    public function tolak(Request $req, $id)
    {
        $data = MahasiswaAsing::find($id);
        $data->is_approved = false;
        $data->comment = $req->comment;
        $data->updated_at = Carbon::now();
        $data->updated_by = auth()->user()->name;
        $data->update();
        return back()->with('success', 'Data Mahasiswa Asing berhasil ditolak.');
    }
}
