<?php

namespace App\Exports;

use App\Models\PublikasiIlmiahMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PublikasiIlmiahExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Media Id',
            'Jumlah Ts-2',
            'Jumlah Ts-1',
            'Jumlah Ts',
            'Jumlah',
            'Tahun Laporan',
            'Prodi',
        ];
        return $array;
    }

    public function collection()
    {
        $array = [
            'media_id',
            'jumlah_ts2',
            'jumlah_ts1',
            'jumlah_ts',
            'jumlah',
            'tahun_laporan',
            'prodi',
        ];
        return PublikasiIlmiahMahasiswa::select($array)->get();
    }
}
