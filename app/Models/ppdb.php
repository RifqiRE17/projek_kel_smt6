<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class ppdb extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='ppdb';
    protected $primaryKey = 'id';
    protected $fillable=[
        'nama_lengkap','nama_panggilan','alamat','tempat_tanggal_lahir','pesan','ijazah_tk','akta_kelahiran','ktp_orang_tua','kartu_keluarga','sertifikat_penghargaan'
    ];
}
