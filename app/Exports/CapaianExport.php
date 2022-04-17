<?php

namespace App\Exports;

use App\Models\CapaianPembelajaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Symfony\Component\CssSelector\Node\FunctionNode;

class CapaianExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Jumlah Lulusan',
            'Ipk Min',
            'Ipk Avg',
            'Ipk Max',
            'Tahun Laporan',
            'Prodi',
        ];
        return $array;
    }
    public function collection()
    {
        $array = [
            'jumlah_lulusan',
            'ipk_min',
            'ipk_avg',
            'ipk_max',
            'tahun_laporan',
            'prodi',
         ];
        return CapaianPembelajaran::select($array)->get();
    }
}
