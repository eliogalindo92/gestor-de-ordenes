<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entidad;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entidad>
 */
class EntidadFactory extends Factory
{
    protected $model = Entidad::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'nombre_entidad'=>$this->faker->company()
        ];
    }
}
