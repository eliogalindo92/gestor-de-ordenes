<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    protected $table = 'planes';
    protected $dates = ['fecha_distribucion'];
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
        [
            'id_entidad',
            'numero_plan',
            'fecha_distribucion'
        ];
}
