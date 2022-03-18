<?php

namespace App\Models;

use App\Models\Sumberdaya;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SdmKinerjaDosenPkmDtps extends Model
{
    use HasFactory;
    protected $table = 'sdm_kinerja_dosen_pkm_dtps';
    protected $guarded = ['id'];

    public function sumber()
    {
       return $this->belongsTo('\App\Models\Sumberdaya', 'sumber_id', 'id');
    }
}
