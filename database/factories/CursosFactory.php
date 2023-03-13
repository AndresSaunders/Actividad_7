<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\Cursosrobotica;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cursosrobotica>
 */
class CursosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            'id_curso'=>$this->faker->name(),
            'nombrecurso'=>$this->faker->jobTitle(),
            'kitrobotica'=>$this->faker->company()
        ];
    }
}
