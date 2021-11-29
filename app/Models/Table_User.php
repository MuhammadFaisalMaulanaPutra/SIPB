<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_User extends Model  
{
    use HasFactory;

    protected $table = 'table_user';

    public function Pelaporan3()
    {
        return $this->hasMany('App/Pelaporan','FK_Id_user','id');
    }

    public function user_role()
    {
        return $this->hasMany('App/UserRole','FK_Id_user','id');
    }

}
