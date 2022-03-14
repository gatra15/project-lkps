<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LuaranPkmMahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'luaran_pkm_mahasiswas';
    
}
