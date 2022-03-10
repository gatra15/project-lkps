<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdmKinerjaDosenPublikasiIlmiahDtps extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function media()
    {
        return $this->belongsTo('App\Models\MediaPublikasi', 'media_id', 'id');
    }
}
