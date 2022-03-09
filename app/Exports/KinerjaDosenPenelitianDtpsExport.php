<?php

namespace App\Exports;

use App\Models\SdmKinerjaDosenPenelitianDtps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KinerjaDosenPenelitianDtpsExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Sumber Pembiayaan',
            'Jumlah Judul TS-2',
            'Jumlah Judul TS-1',
            'Jumlah Judul TS',
            'Jumlah',
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
        ];
        return SdmKinerjaDosenPenelitianDtps::select($array);
    }
}
