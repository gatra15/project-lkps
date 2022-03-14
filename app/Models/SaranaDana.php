<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaDana extends Model
{
    use HasFactory;
    protected $table = 'sarana_danas';
    protected $guarded = ['id'];

    public function sarana()
    {
        return $this->belongsTo('App\Models\JenisPenggunaan', 'sarana_id', 'id');
    }
    public function biaya()
    {
        return $this->belongsTo('\App\Models\BiayaOperasionalPendidikan', 'biaya_id', 'id');
    }
}
