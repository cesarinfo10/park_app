<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacione extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'calificacion',
        'fecha_hora',
        'estado'
    ];
}
