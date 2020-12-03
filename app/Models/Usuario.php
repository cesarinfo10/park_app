<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_usuarios_id',
        'nombre',
        'apellido',
        'edad',
        'email',
        'pass',
        'barrio',
        'fecha_nacimiento',
        'foto_perfil',
        'foto_portada',
        'genero_artistico',
        'descripcion',
        'estado'
    ];

    public function tipo_usuarios() {
        return $this->belongsTo('App\Models\Tipo_usuario');
      }
}
