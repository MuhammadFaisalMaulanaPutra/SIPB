<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    
    protected $table = 'role';

    public function user_role()
    {
        return $this->hasMany('App/UserRole','FK_Id_role','id_role');
    }

}
