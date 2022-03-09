<?php

namespace App\Exports;

use App\Models\SdmKinerjaDosenPkmDtps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KinerjaDosenPkmDtpsExport implements FromCollection, WithHeadings
{
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
    /**
    * @return \Illuminate\Support\Collection
    */
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
        return SdmKinerjaDosenPkmDtps::select($array)->get();
    }
}
