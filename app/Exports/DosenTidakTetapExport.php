<?php

namespace App\Exports;

use App\Models\SdmDosenTidakTetap;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DosenTidakTetapExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'nama',
            'no id',
            'pendidikan pasca sarjana',
            'bidang keahlian',
            'jabatan akademik',
            'sertifikat pendidikan profesi',
            'sertifikat profesi',
            'mata kuliah diampu ps akreditasi',
            'kesesuaian mata kuliah diampu',
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
            'no_id',
            'pendidikan_pasca_sarjana',
            'bidang_keahlian',
            'jabatan_akademik',
            'sertifikat_pendidikan_profesi',
            'sertifikat_profesi',
            'mata_kuliah_diampu_ps_akreditasi',
            'kesesuaian_mata_kuliah_diampu',
        ];
        return SdmDosenTidakTetap::select($array);
    }
}
