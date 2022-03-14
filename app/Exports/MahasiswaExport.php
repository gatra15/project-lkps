<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahasiswaExport implements FromCollection, WithHeadings
{
    public function headings():array
    {
        return [
            'Tahun Akademik', 'Daya Tampung', 'Calon Pendaftar', 'Calon Lulus Seleksi', 'Mahasiswa Reguler', 'Mahasiswa Transfer', 'Mahasiswa Aktif Reguler', 'Mahasiswa Aktif Transfer', 'Tahun Laporan', 'Program Studi'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    
        return (Mahasiswa::with('tahun')->get());
    }
}
