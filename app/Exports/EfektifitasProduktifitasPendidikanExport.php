<?php

namespace App\Exports;

use App\Models\EfektifitasProduktifitasPendidikan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EfektifitasProduktifitasPendidikanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'Tahun Id',
            'Jumlah Mahasiswa',
            'Ts-3',
            'Ts-2',
            'Ts-1',
            'Ts',
            'Jumlah',
            'Average',
            'Tahun Laporan',
            'Prodi',
        ];
        return $array;
    }
    
    public function collection()
    {
        $array = [
            'tahun_id',
            'jumlah_mahasiswa',
            'ts3',
            'ts2',
            'ts1',
            'ts',
            'jumlah',
            'average',
            'tahun_laporan',
            'prodi',
        ];
        return EfektifitasProduktifitasPendidikan::select($array)->get();
    }
}
