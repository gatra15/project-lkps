<?php

namespace App\Exports;

use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KinerjaDosenPublikasiExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Media Publikasi',
            'Jumlah Judul TS-2',
            'Jumlah Judul TS-1',
            'Jumlah Judul TS',
            'Jumlah',
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
            'media_publikasi',
            'jumlah_ts2',
            'jumlah_ts1',
            'jumlah_ts',
            'jumlah',
            'tahun_laporan',
            'prodi',
        ];
        return SdmKinerjaDosenKaryaIlmiahDtps::select($array)->get();
    }
}
