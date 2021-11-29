<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'Kecamatan';

    public function kota()
    {
        return $this->belongsTo('App/Kota','FK_ID_Kota','id_kecamatan');
    }

    public function Pelaporan()
    {
        return $this->hasMany('App/Pelaporan','FK_Id_kecamatan','id_kecamatan');
    }
}
