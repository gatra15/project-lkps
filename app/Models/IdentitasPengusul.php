<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentitasPengusul extends Model
{
    use HasFactory;

    protected $table = 'identitas_pengusuls';

    protected $guarded = ['id'];
}
