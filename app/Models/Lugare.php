<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugare extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom_lugar',
        'descripcion',
        'direccion',
        'contacto',
        'observaciones',
        'estado'
    ];
}
