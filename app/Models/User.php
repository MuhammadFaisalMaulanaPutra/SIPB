<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // protected $table = 'users';

    protected $fillable = [
        'nama_user',
        'tgl_lahir',
        'email',
        'password'
    ];

    public function Pelaporan3()
    {
        return $this->hasMany('App/Pelaporan','FK_Id_user','id');
    }

    public function user_role()
    {
        return $this->hasMany('App/UserRole','FK_Id_user','id');
    }
}
