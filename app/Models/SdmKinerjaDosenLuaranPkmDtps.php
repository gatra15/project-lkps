<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdmKinerjaDosenLuaranPkmDtps extends Model
{
    use HasFactory;
    protected $table = 'sdm_kinerja_dosen_luaran_pkm_dtps';
    protected $gurded = ['id'];

    public function jenis()
    {
        return $this->belongsTo('App\Models\JenisLuaran', 'sumber_id', 'id');
    }
}
