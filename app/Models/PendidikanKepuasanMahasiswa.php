<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanKepuasanMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'pendidikan_kepuasan_mahasiswas';
    protected $guarded = ['id'];

    public function aspek()
    {
        return $this->belongsTo('App\Models\Aspek', 'aspek_id', 'id');
    }
}
