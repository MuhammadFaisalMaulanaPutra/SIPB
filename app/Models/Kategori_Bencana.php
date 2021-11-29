<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Bencana extends Model
{
    use HasFactory;
    
    protected $table = 'kategori_bencana';

    public function bencana()
    {
        return $this->hasMany('App/Bencana','FK_Id_kategori_bencana','id_kateg_bencana');
    }
}
