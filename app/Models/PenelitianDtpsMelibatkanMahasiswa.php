<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenelitianDtpsMelibatkanMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'penelitian_dtps_melibatkan_mahasiswas';
    protected $gurded = ['id'];
}
