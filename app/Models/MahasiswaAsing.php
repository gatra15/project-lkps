<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaAsing extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_asings';
    protected $guaraded = ['id'];
    protected $fillable = ['mahasiswa_aktif_ts', 'mahasiswa_asing_pt_ts', 'mahasiswa_asing_ft_ts', 'tahun_laporan', 'prodi', 'progra_studi'];
}
