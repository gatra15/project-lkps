<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EfektifitasProduktifitasPendidikan extends Model
{
    use HasFactory;
    protected $table = 'efektifitas_produktifitas_pendidikans';
    protected $guarded = ['id'];

    public function tahun()
    {
        return $this->belongsTo('App\Models\Ts', 'tahun_id', 'id');
    }
}
