<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class HomeUser extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='aboutstarts';
    protected $primaryKey = 'id';
    protected $fillable=[
        'judul','isi','gambar1','gambar2','gambar3','gambar4'
    ];
}
