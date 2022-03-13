<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesesuaianBidangKerja extends Model
{
    use HasFactory;

    protected $table = 'kesesuaian_bidang_kerjas';
    protected $guarded = ['id'];

    public function tahun()
    {
        return $this->belongsTo('App\Models\Ts', 'tahun_id', 'id');
    }
}
