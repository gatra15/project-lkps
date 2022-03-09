<?php

namespace App\Exports;

use App\Models\SdmEkuivalenWaktuMengajarPenuhDosenTetap;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DosenEwmpExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'nama',
            'dtps',
            'ps akreditasi',
            'ps lain dalam pt',
            'ps lain luar pt',
            'penelitian',
            'pkm',
            'penunjang',
            'sks',
            'average per sks',
        ];
        return $array;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $array = [
            'nama',
            'dtps',
            'ps_akreditasi',
            'ps_lain_dalam_pt',
            'ps_lain_luar_pt',
            'penelitian',
            'pkm',
            'penunjang',
            'sks',
            'average_per_sks',
        ];
        return SdmEkuivalenWaktuMengajarPenuhDosenTetap::select($array)->get();
    }
}
