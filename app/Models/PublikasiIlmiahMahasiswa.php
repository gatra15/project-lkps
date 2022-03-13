<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublikasiIlmiahMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'publikasi_ilmiah_mahasiswas';
    protected $guarded = ['id'];

    public function media()
    {
        return $this->belongsTo('App\Models\MediaPublikasi', 'media_id', 'id');
    }
}
