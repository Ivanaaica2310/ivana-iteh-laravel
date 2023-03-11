<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investitor>
 */
class InvestitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firma' => $this->faker->company(),
            'godOsnivanja' => $this->faker->numberBetween($min = 1895, $max = 2022),
            'website' => $this->faker->domainName(),
        ];
    }
}
