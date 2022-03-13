<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KinerjaLulusan extends Model
{
    use HasFactory;

    protected $table = 'kinerja_lulusans';
    protected $guarded = ['id'];

    public function tahun()
    {
        return $this->belongsTo('App\Models\Ts', 'tahun_id', 'id');
    }
}
