<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimPenyusun extends Model
{
    use HasFactory;
    protected $table = 'tim_penyusuns';
    protected $guarded = ['id'];

    public function getTanggalPengisianAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_pengisian'])->translatedFormat('l, d F Y');
    }
}
