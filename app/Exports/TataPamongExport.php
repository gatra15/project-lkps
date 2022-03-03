<?php

namespace App\Exports;

use App\Models\IndikatorTataKerjasama;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TataPamongExport implements FromCollection, WithHeadings
{
    public function headings():array
    {
        return [
            'Id', 'Tridharma', 'Lembaga Mitra', 'Judul Kegiatan', 'Manfaat', 'Waktu Durasi', 'Bukti Kerjasama', 'Tahun Laporan', 'Prodi', 'Created by', 'Created at', 'Updated at'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return collect(IndikatorTataKerjasama::getData());
    }
}
