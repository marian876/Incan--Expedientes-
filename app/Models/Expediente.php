<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nro_expediente',
        'nombre_paciente',
        'id_proceso',
        'ubicacion_digital',
        'ubicacion_fisica',
        'estado_paciente',
    ];
}
