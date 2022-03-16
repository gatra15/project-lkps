<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimulasiPenilaian extends Model
{
    use HasFactory;
    protected $table = 'simulasi_penilaians';
    protected $guarded = ['id'];
}
