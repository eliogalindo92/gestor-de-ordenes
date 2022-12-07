<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table = 'productos';
    protected $fillable =
        [
            'codigo',
            'descripcion',
            'unidad_de_medida',
            'existencia_en_almacen'
        ];
}
