<?php

namespace App\Exports;

use App\Models\LuaranPkmMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LuaranPkmMahasiswaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function headings(): array
    {
        $array = [
            'type Luaran',
            'Judul',
            'Tahun',
            'Keterangan',
            'Bukti',
            'Tahun Laporan',
            'Prodi',
        ];
        return $array;
    }

    public function collection()
    {
        $array = [
            'type_luaran',
            'judul',
            'tahun',
            'keterangan',
            'bukti',
            'tahun_laporan',
            'prodi',
        ];

        return LuaranPkmMahasiswa::select($array)->get();
    }
}
