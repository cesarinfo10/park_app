<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'usuario_id',
        'tipo_mensaje_id',
        'mensaje',
        'fecha_hora',
        'estado'
    ];

}
