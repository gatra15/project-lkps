<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaDana extends Model
{
    use HasFactory;
    protected $table = 'sarana_danas';
    protected $guarded = ['id'];
}
