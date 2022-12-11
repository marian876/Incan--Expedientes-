<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expedientes>
 */
class ExpedienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_proceso' => $this->faker->numberBetween(1, 100),
            'nombre_paciente' => $nombre = $this->faker->lastName(),
            'nro_expediente' => $this->faker->unique()->numberBetween(1000000, 9000000),
            'ubicacion_digital' => Str::slug($nombre),
            'ruta_original' => "/incan/public/pdf/Pedro.pdf",
            'ubicacion_fisica' => $this->faker->numberBetween(1, 10),
            'estado_exp' => $this->faker->randomElement(['Disponible', 'Pendiente de actualización', 'Retirado']),
            'estado_paciente' => $this->faker->randomElement(['Activo', 'Inactivo'])
        ];
    }
}
