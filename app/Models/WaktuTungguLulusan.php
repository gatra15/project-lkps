<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaktuTungguLulusan extends Model
{
    use HasFactory;

    protected $table = 'waktu_tunggu_lulusans';
    protected $guarded = ['id'];

    public function tahun()
    {
        return $this->belongsTo('App\Models\TS', 'tahun_id', 'id');
    }
}
