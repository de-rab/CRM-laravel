<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
     
        ];
    }
}
