<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdmDosenTidakTetap extends Model
{
    use HasFactory;

    protected $table = 'sdm_dosen_tidak_tetaps';
    protected $guarded = ['id'];
}
