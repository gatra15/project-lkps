<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaAsing extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_asings';
    protected $guaraded = ['id'];
}
