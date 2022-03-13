<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKemampuan extends Model
{
    use HasFactory;
    protected $table = 'jenis_kemampuans';
    protected $guarded = ['id'];
}
