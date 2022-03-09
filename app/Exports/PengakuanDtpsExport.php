<?php

namespace App\Exports;

use App\Models\SdmKinerjaDosenPengakuanDtps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengakuanDtpsExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array=[
            'Nama Dosen',
            'Bidang Keahlian',
            'Rekognisi dan Bukti Pendukung',
            'Tingkat',
            'Tahun',
        ];
        return $array;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $array=[
            'nama',
            'bidang_keahlian',
            'bukti_pendukung',
            'tingkat',
            'tahun',
        ];
        return SdmKinerjaDosenPengakuanDtps::select($array);
    }
}
