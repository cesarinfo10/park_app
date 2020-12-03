<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacione extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'usuario_id',
        'equipo_id',
        'titulo',
        'mensaje',
        'estado'
    ];
    public function usuario_id(){
        return $this->blongsto(Usuario::class);
    }
}
