<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoHabitacion extends Model
{
    protected $fillable = [
        'nombre_estado',
        'descripcion'
    ];
}
