<?php

namespace App\Models;

use App\Models\Sumberdaya;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SdmKinerjaDosenPenelitianDtps extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function sumber()
    {
        return $this->belongsTo('App\Models\Sumberdaya', 'sumber_id', 'id');
    }
}
