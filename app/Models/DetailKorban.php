<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKorban extends Model
{
    use HasFactory;
    
    protected $table = 'detail_korban';

    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class,'FK_Id_pelaporan','id');
    }
}
