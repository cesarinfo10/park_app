<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_mensaje extends Model
{
    use HasFactory;
    protected $fillable = [
        'desc_tipo',
        'estado'
    ];
}
