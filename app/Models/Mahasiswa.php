<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $nullable = ['tahun_akademik'];

    public function tahun_detail()
    {
        $this->belongsTo('\App\Models\Tahun', 'tahun_id', 'id');
    }
}
