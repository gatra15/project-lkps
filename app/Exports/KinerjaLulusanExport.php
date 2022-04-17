<?php

namespace App\Exports;

use App\Models\KinerjaLulusan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KinerjaLulusanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Jumlah Lulusan',
            'Jumlah Lulusan Terlacak',
            'Tempat Wilayah Tidak Berizin',
            'Tempat Nasional Berizin',
            'Internasional',
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
            'tempat_wilayah_tidak_berizin',
            'tempat_nasional_berizin',
            'internasional',
            'tahun_laporan',
            'prodi',
        ];
        return KinerjaLulusan::select($array)->get();
    }
}
