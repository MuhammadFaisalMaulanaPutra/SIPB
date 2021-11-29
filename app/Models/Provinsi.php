<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    
    protected $table = 'provinsi';

    public function kota()
    {
        return $this->hasMany('App/Kota','FK_ID_PROVINSI','id_provinsi');
    }

}
