<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanIntegrasiKegiatanPenelitian extends Model
{
    use HasFactory;
    protected $table = 'pendidikan_integrasi_kegiatan_penelitians';
    protected $guarded = ['id'];
}
