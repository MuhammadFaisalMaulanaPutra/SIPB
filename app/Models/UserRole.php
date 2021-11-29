<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    
    protected $table = 'user_role';

    public function user()
    {
        return $this->belongsTo('App/User','FK_Id_user','id_user_role');
    }

    public function role()
    {
        return $this->belongsTo('App/Role','FK_Id_role','id_user_role');
    }
}
