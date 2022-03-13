<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepuasanPengguna extends Model
{
    use HasFactory;

    protected $table = 'kepuasan_penggunas';
    protected $guarded = ['id'];

    public function kemampuan()
    {
        return $this->belongsTo('App\Models\JenisKemampuan', 'kemampuan_id', 'id');
    }
}
