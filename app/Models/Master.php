<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Master extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='sliderimgs';
    protected $primaryKey = 'id';
    protected $fillable=[
        'judul','isi','gambar'
    ];
}
