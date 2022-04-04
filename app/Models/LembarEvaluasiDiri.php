<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembarEvaluasiDiri extends Model
{
    use HasFactory;
    protected $table = 'lembar_evaluasi_diris';
    protected $guarded = ['id'];
}
