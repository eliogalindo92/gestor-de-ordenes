<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entidad extends Model
{
    protected $table = 'entidades';
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
        [
            'nombre_entidad'
        ];
}
