<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IndikatorTataKerjasama extends Model
{
    use HasFactory;

    protected $table = 'indikator_tata_kerjasamas';

    protected $guarded = ['id'];

    public static function getData()
    {
        $record = DB::table('indikator_tata_kerjasamas')->select('id', 'tridharma', 'lembaga_mitra', 'judul_kegiatan', 'manfaat', 'waktu_durasi', 'bukti_kerjasama', 'tahun_laporan', 'prodi', 'created_by', 'created_at', 'updated_at')->get()->toArray();
        return $record;
    }
}
