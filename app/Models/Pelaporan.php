<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $table = 'pelaporan';
    // protected $fillable = [
    //     'judul_laporan',
    //     'isi_laporan',
    //     'id_bencana',
       


    public function user()
    {
        return $this->belongsTo('App/User','FK_Id_user','id_pelaporan');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class,'FK_Id_kecamatan','id');
    }

    public function bencana()
    {
        return $this->belongsTo ( Bencana::class,'FK_Id_bencana','id_bencana');
    }

    public function detail_korban()
    {
        return $this->hasMany('App/DetailKorban','FK_Id_pelporan','id_pelaporan');
    }
}