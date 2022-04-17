<?php

namespace App\Exports;

use App\Models\PrestasiMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PrestasiMahasiswaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Jenis Prestasi',
            'Nama Kegiatan',
            'Tahun Perolehan',
            'Tingkat',
            'Type Prestasi',
            'Tahun Laporan',
            'Prodi',
        ];
        return $array;
    }
    public function collection()
    {
        $array = [
            'jenis_prestasi',
            'nama_kegiatan',
            'tahun_perolehan',
            'tingkat',
            'type_prestasi',
            'tahun_laporan',
            'prodi',
        ];
        return PrestasiMahasiswa::select($array)->get();
    }
}
