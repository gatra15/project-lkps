<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PkmDtps extends Model
{
    use HasFactory;
    protected $table = 'pkm_dtps';
    protected $guarded = ['id'];
}
