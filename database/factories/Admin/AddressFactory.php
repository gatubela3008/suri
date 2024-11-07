<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Canton;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'district' => $this->faker->word(2),
            'street' => $this->faker->word(),
            'residence' => $this->faker->word(3),
            'canton_id' => Canton::inRandomOrder()->first()->id,
        ];
    }
}
