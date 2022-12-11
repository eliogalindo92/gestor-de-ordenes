<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orden extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
        [
            'numero_orden',
            'fecha_elaboracion',
            'codigo_producto',
            'descripcion_producto',
            'unidad_medida',
            'cantidad_ordenada',
            'existencia_en_almacen'
        ];
}