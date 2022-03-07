<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SdmDosen extends Model
{
    use HasFactory;

    protected $table = 'sdm_dosens';
    protected $guarded = ['id'];
}
