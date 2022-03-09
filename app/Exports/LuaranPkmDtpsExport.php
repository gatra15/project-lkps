<?php

namespace App\Exports;

use App\Models\SdmKinerjaDosenLuaranPkmDtps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LuaranPkmDtpsExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Tipe Luaran',
            'Judul Luaran Penelitian/PkM',
            'Tahun',
            'Keterangan',
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
            'type_luaran',
            'judul',
            'tahun',
            'keterangan',
            'tahun_laporan',
            'prodi',
        ];
        return SdmKinerjaDosenLuaranPkmDtps::select($array)->get();
    }
}
