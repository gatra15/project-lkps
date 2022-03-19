<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upps extends Model
{
    use HasFactory;
    protected $table = 'upps';
    protected $guarded = ['id'];
}
