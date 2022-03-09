<?php

namespace App\Exports;

use App\Models\PenelitianDtpsMelibatkanMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenelitianExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Nama Dosen',
            'Tema Penelitian ( Sesuai Roadmap )',
            'Nama Mahasiswa',
            'Judul Kegiatan',
            'Tahun',
            'Tahun Laporan',
            'Program Studi',
        ];
        return $array;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $array = [
            'nama_dosen',
            'tema',
            'nama_mahasiswa',
            'judul',
            'tahun',
            'tahun_laporan',
            'prodi',
        ];
        return PenelitianDtpsMelibatkanMahasiswa::select($array)->get();
    }
}
