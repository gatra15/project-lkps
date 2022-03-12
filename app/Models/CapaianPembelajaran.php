<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CapaianPembelajaran extends Model
{
    use HasFactory;
    protected $table = 'capaian_pembelajarans';
    protected $guarded = ['id'];

    public function tahun()
    {
        return $this->belongsTo('App\Models\TS', 'tahun_id', 'id');
    }
}
