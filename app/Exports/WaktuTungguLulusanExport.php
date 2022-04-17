<?php

namespace App\Exports;

use App\Models\WaktuTungguLulusan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WaktuTungguLulusanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Jumlah Lulusan',
            'Jumlah Lulusan terlacak',
            'Waktu Tunggu 6',
            'Waktu Tunggu 6 18',
            'Waktu Tunggu 18',
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
            'waktu_tunggu_6',
            'waktu_tunggu_6_18',
            'waktu_tunggu_18',
            'tahun_laporan',
            'prodi',
        ];
        return WaktuTungguLulusan::select($array)->get();
    }
}
