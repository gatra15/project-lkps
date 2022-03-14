<?php

namespace App\Exports;

use App\Models\MahasiswaAsing;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahasiswaAsingExport implements FromCollection, WithHeadings
{
    public function headings():array
    {
        return [
            'Program Studi', 'Jumlah Mahasiswa Aktif TS-2', 'Jumlah Mahasiswa Aktif TS-1', 'Jumlah Mahasiswa Aktif TS', 'Jumlah Mahasiswa Asing Penuh Waktu(Full-time) TS-2', 'Jumlah Mahasiswa Asing Penuh Waktu(Full-time) TS-1', 'Jumlah Mahasiswa Asing Penuh Waktu(Full-time) TS', 'Jumlah Mahasiswa Asing Paruh Waktu(Part-time) TS-2', 'Jumlah Mahasiswa Asing Paruh Waktu(Part-time) TS-1', 'Jumlah Mahasiswa Asing Paruh Waktu(Part-time) TS', 'Tahun Laporan', 'Program Studi'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MahasiswaAsing::all();
    }
}
