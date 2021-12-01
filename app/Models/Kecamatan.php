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
        return $this->belongsTo(Kota::class,'FK_ID_KOTA','id');
    }

    public function Pelaporan()
    {
        return $this->hasMany(Pelaporan::class,'FK_Id_kecamatan','id_kecamatan');
    }
}
