<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class direktori extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='direktoris';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nama_kepala_sekolah','foto_kepala_sekolah','nama_guru','foto_guru','nama_pegawai','foto_pegawai'
    ];
}
