<?php

namespace App\Exports;

use App\Models\PendidikanKepuasanMahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendidikanKepuasanMahasiswaExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
            'Aspek yang Diukur',
            'Tingkat Kepuasan Mahasiswa Sangat Baik',
            'Tingkat Kepuasan Mahasiswa Baik',
            'Tingkat Kepuasan Mahasiswa Cukup',
            'Tingkat Kepuasan Mahasiswa Kurang',
            'Rencana Tindak Lanjut oleh UPPS/PS',
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
            'aspek_id',
            'sangat_baik',
            'baik',
            'cukup',
            'kurang',
            'rencana_tindak_lanjut',
            'tahun_laporan',
            'prodi',
        ];
        return PendidikanKepuasanMahasiswa::select($array)->get();
    }
}
