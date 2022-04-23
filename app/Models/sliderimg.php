<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class sliderimg extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table='sliderimgs';
    protected $primaryKey = 'id';
    protected $fillable=[
        'juduk','isi'
    ];
}
