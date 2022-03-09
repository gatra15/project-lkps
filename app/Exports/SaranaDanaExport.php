<?php

namespace App\Exports;

use App\Models\SaranaDana;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SaranaDanaExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Jenis Penggunaan',
            'Unit Pengelola Program Studi (Rp.) TS-2',
            'Unit Pengelola Program Studi (Rp.) TS-1',
            'Unit Pengelola Program Studi (Rp.) TS',
            'Unit Pengelola Program Studi (Rp.) Rata-rata',
            'Program Studi (Rp.) TS-2',
            'Program Studi (Rp.) TS-1',
            'Program Studi (Rp.) TS',
            'Program Studi (Rp.) Rata-rata',
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
            'jenis_penggunaan',
            'unit_pengelola_ts2',
            'unit_pengelola_ts1',
            'unit_pengelola_ts',
            'unit_pengelola_average',
            'ps_ts2',
            'ps_ts1',
            'ps_ts',
            'ps_average',
            'tahun_laporan',
            'prodi',
        ];
        return SaranaDana::select($array)->get();
    }
}
