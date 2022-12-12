<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    protected $table = 'planes';
    use HasFactory;
    use SoftDeletes;

    protected $fillable =
        [
            'numero_plan',
            'fecha_distribucion'
        ];
}
