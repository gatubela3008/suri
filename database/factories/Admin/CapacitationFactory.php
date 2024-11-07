<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Capacitation>
 */
class CapacitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $estimated_weeks = $this->faker->numberBetween(1, 100);
        $monthly = (80000-15000)/$estimated_weeks;
        return [
            'name' => $this->faker->word(5),
            'sumary' => $this->faker->text(200),
            'decription' => $this->faker->text(),
            'estimated_weeks' => $estimated_weeks,
            'price' => 80000,
            'installments' => 15000,
            'monthly' => $monthly,
        ];
    }
}
