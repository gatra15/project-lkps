<?php

namespace App\Exports;

use App\Models\PendidikanKurikulum;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendidikanKurikulumExport implements FromCollection, WithHeadings
{
    public function headings(): array
    {
        $array = [
           'Semester',
           'Kode Mata Kuliah',
           'Nama Mata Kuliah',
           'Mata Kuliah Kompetensi',
           'Kualiah/ Responsi/ Tutorial',
           'Seminar',
           'Praktikum/ Praktik/ Praktik Lapangan',
           'Konversi Kredit ke Jam',
           'Sikap',
           'Pengetahuan',
           'Ketrampilan Umum',
           'Ketrampilan Khusus',
           'Dokumen Rencana Pembelajaran',
           'Unit Penyelenggara',
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
            'semester',
            'kode_mata_kuliah',
            'nama_mata_kuliah',
            'mata_kuliah_kompetensial',
            'bobot_kuliah',
            'bobot_seminar',
            'bobot_praktikum',
            'konversi_kredit_jam',
            'capaian_sikap',
            'capaian_pengetahuan',
            'capaian_ketrampilan_umum',
            'capaian_ketrampilan_khusus',
            'document_rencana_pembelajaran',
            'unit_penyelenggara',
            'tahun_laporan',
            'prodi',
         ];
        return PendidikanKurikulum::select($array)->get();
    }
}
