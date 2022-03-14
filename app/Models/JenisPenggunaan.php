<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPenggunaan extends Model
{
    use HasFactory;
    protected $table = 'jenis_penggunaans';
    protected $guarded = ['id'];

    public function biaya()
    {
        return $this->belongsTo('\App\Models\BiayaOperasionalPendidikan', 'biaya_id', 'id');
    }
}
