<?php

namespace App\Exports;

use App\Models\PkmDtps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PkmExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        $array = [
            'Sumber Pembiayaan',
            'Jumlah Judul TS-2',
            'Jumlah Judul TS-1',
            'Jumlah Judul TS',
            'Jumlah',
            'Tahun Laporan',
            'Program Studi'
        ];
        return $array;
    }

    public function collection()
    {
        $array = [
            'sumber_pembiayaan',
            'jumlah_ts2',
            'jumlah_ts1',
            'jumlah_ts',
            'jumlah',
            'tahun_laporan',
            'prodi',
         ];
        return PkmDtps::select($array)->get();
    }
}
