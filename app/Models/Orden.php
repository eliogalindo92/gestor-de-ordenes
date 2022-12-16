<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orden extends Model
{
    protected $table = 'ordenes';
    protected $dates = ['fecha_elaboracion'];
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
        [
            'id_entidad',
            'numero_orden',
            'fecha_elaboracion',
            'codigo_producto',
            'descripcion_producto',
            'unidad_de_medida',
            'cantidad_ordenada',
            'existencia_en_almacen'
        ];
}
