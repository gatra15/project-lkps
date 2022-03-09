<?php

namespace App\Exports;

use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KaryaIlmiahDtpsExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Nama Dosen',
            'Judul Artikel yang Disitasi',
            'Rekognisi dan Bukti Pendukung',
        ];
        return $array;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $array = [
            'nama_dosen',
            'judul',
            'jumlah_sitasi',
        ];
        return SdmKinerjaDosenKaryaIlmiahDtps::select($array);
    }
}
