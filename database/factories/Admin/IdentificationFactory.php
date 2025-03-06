<?php

namespace Database\Factories\Admin;

use App\Models\IdType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Identification>
 */
class IdentificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->bothify('####-????'),
            'id_type_id' => IdType::inRandomOrder()->first()->id,
            
        ];
    }
}
