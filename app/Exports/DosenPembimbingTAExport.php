<?php

namespace App\Exports;

use App\Models\SdmDosenPembimbingTa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DosenPembimbingTAExport implements FromCollection, WithHeadings
{
    public function headings():array
    {
        $array = [
            'nama',
            'surat tugas',
            'jumlah ps akreditasi ts2',
            'jumlah ps akreditasi ts1',
            'jumlah ps akreditasi ts',
            'jumlah ps akreditasi average',
            'jumlah ps lain ts2',
            'jumlah ps lain ts1',
            'jumlah ps lain ts',
            'jumlah ps lain average',
            'average',
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
            'surat_tugas',
            'jumlah_ps_akreditasi_ts2',
            'jumlah_ps_akreditasi_ts1',
            'jumlah_ps_akreditasi_ts',
            'jumlah_ps_akreditasi_average',
            'jumlah_ps_lain_ts2',
            'jumlah_ps_lain_ts1',
            'jumlah_ps_lain_ts',
            'jumlah_ps_lain_average',
            'average',
        ];
        return SdmDosenPembimbingTa::select($array)->get();
    }
}
