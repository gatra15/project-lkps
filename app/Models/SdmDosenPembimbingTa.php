<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdmDosenPembimbingTa extends Model
{
    use HasFactory;
    protected $table = 'sdm_dosen_pembimbing_tas';
    protected $guarded = ['id'];
}
