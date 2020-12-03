<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'inicia',
        'finaliza',
        'recurrencia',
        'duracion',
        'desc_evento',
        'restriccion',
        'pro_calificacion',
        'planeo_asis',
        'estado',
    ];
    public function usuario_id(){
        return $this->blongsto(Usuario::class);
    }

    public function categoria_id(){
        return $this->blongsto(Categoria::class);
    }

    public function lugares_id(){
        return $this->blongsto(Lugare::class);
    }

}
