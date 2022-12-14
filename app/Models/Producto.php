<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    protected $table = 'productos';
    use HasFactory;
    use softDeletes;
    protected $fillable =
        [
            'codigo_producto',
            'descripcion_producto',
            'unidad_de_medida',
            'almacen',
            'existencia_en_almacen',
            'finalizada'
        ];
}
