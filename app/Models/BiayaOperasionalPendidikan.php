<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaOperasionalPendidikan extends Model
{
    use HasFactory;
    protected $table = 'biaya_operasional_pendidikans';
    protected $guarded = ['id'];
}
