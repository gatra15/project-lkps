<?php

namespace App\Exports;

use App\Models\KesesuaianBidangKerja;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KesesuaianBidangKerjaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Jumlah Lulusan',
            'Jumlah Lulusan Terlacak',
            'Kesesuaian Rendah',
            'Kesesuaian Sedang',
            'Kesesuaian Tinggi',
            'Tahun Laporan',
            'Prodi',
        ];

        return $array;
    }

    public function collection()
    {
        $array = [
            'jumlah_lulusan',
            'jumlah_lulusan_terlacak',
            'kesesuaian_rendah',
            'kesesuaian_sedang',
            'kesesuaian_tinggi',
            'tahun_laporan',
            'prodi',
        ];

        return KesesuaianBidangKerja::select($array)->get();
    }
}
