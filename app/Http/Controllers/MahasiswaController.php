<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
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
        $cek = Mahasiswa::where('tahun_laporan', $tahun)->where('prodi', $prodi)->exists();

        if (!$cek){
            Mahasiswa::create([
                'tahun_laporan' => $tahun,
                'prodi' => $prodi
            ]);
        }
            
        $where = [
            ['prodi', '=', $prodi],
            ['tahun_laporan', '<=', $tahun],
            ['tahun_laporan', '>=', $tahun-4]
        ];

        $mahasiswa = Mahasiswa::where($where)->get();
        $mahasiswa_asesor = Mahasiswa::where($where)->where('is_approved', 1)->get();
                    
        $pendaftar = Mahasiswa::where($where)->sum('c_pendaftar');
        $lulus_seleksi = Mahasiswa::where($where)->sum('c_lulus_seleksi');
        $reguler = Mahasiswa::where($where)->sum('mahasiswa_reguler');
        $transfer = Mahasiswa::where($where)->sum('mahasiswa_transfer');
        $aktif_reguler = Mahasiswa::where($where)->sum('mahasiswa_aktif_reguler');
        $aktif_transfer = Mahasiswa::where($where)->sum('mahasiswa_aktif_transfer');
        $total = $aktif_reguler + $aktif_transfer;

        $data = [];

        foreach ($mahasiswa as $key => $mhs){
            $data['label'][] = $mhs['tahun_laporan'];
            $data['daya_tampung'][] = $mhs['daya_tampung'];
            $data['pendaftar'][] = $mhs['c_pendaftar'];
            $data['lulus_seleksi'][] = $mhs['c_lulus_seleksi'];
            $data['mahasiswa_reguler'][] = $mhs['mahasiswa_reguler'];
            $data['mahasiswa_transfer'][] = $mhs['mahasiswa_transfer'];
            $data['mahasiswa_aktif_reguler'][] = $mhs['mahasiswa_aktif_reguler'];
            $data['mahasiswa_aktif_transfer'][] = $mhs['mahasiswa_aktif_transfer'];
        }
        $data['chart_data'] = json_encode($data); 
        return [
            'mahasiswa' => $mahasiswa,
            'mahasiswa_asesor' => $mahasiswa_asesor,
            'pendaftar' => $pendaftar,
            'lulus_seleksi' => $lulus_seleksi,
            'reguler' => $reguler,
            'transfer' => $transfer,
            'aktif_reguler' => $aktif_reguler,
            'aktif_transfer' => $aktif_transfer,
            'total' => $total,
            'data' => $data,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
