<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLuaran extends Model
{
    use HasFactory;
    protected $table = 'jenis_luarans';
    protected $guarded = ['id'];
}
