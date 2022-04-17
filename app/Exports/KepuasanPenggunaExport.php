<?php

namespace App\Exports;

use App\Models\KepuasanPengguna;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KepuasanPenggunaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Kemampuan Id',
            'Sangat Baik',
            'Baik',
            'Cukup',
            'Kurang',
            'Rencana Tindak Lanjut',
            'Tahun Laporan',
            'Prodi',
        ];
        return $array;
    }

    public function collection()
    {
        $array = [
            'kemampuan_id',
            'sangat_baik',
            'baik',
            'cukup',
            'kurang',
            'rencana_tindak_lanjut',
            'tahun_laporan',
            'prodi',
        ];
        return KepuasanPengguna::select($array)->get();
    }
}
