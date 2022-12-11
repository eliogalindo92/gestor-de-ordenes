<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitud extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
        [
            'numero_solicitud',
            'fecha_solicitud',
            'descripcion_producto',
            'unidad_medida_pruducto',
            'cantidad_solicitada'
        ];
}
