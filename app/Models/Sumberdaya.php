<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sumberdaya extends Model
{
    use HasFactory;

    protected $table = 'sumberdayas';
    protected $guarded = ['id'];
}
