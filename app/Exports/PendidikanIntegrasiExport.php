<?php

namespace App\Exports;

use App\Models\PendidikanIntegrasiKegiatanPenelitian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendidikanIntegrasiExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Judul Penelitian/PkM',
            'Nama Dosen',
            'Mata Kuliah',
            'Bentuk Integrasi',
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
            'judul',
            'nama_dosen',
            'mata_kuliah',
            'bentuk_integrasi',
            'tahun_laporan',
            'prodi',
        ];
        return PendidikanIntegrasiKegiatanPenelitian::select($array)->get();
    }
}
