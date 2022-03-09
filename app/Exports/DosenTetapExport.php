<?php

namespace App\Exports;

use App\Models\SdmDosen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DosenTetapExport implements FromCollection, WithHeadings
{
    public function headings():array
    {
        return [
            'Nama Dosen',
            'Nidn/Nidk',
            'Pendidikan Pasca Sarjana Magister',
            'Pendidikan Pasca Sarjana Doktor',
            'Bidang Keahlian',
            'Kesesuaian Program Studi',
            'Jabatan Akademik',
            'Sertifikat Pendidik Profesi',
            'Sertifikat Kompetensi',
            'Mata Kuliah Akreditasi yang Diampu',
            'Kesesuaian Mata Kuliah yang Diampu',
            'Mata Kuliah yang Diampu Program Studi lain',
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SdmDosen::all();
    }
}
