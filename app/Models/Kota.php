<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    
    protected $table = 'Kota';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class,'FK_ID_PROVINSI','id');
    }

    public function kecamatan()
    {
        return $this->hasMany('App/Kecamatan','FK_ID_KOTA','id_kota');
    }
}
