<?php

namespace Database\Factories;

use App\Models\Investitor;
use App\Models\Startup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investicija>
 */
class InvesticijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'vrednost' => $this->faker->numberBetween($min = 50000, $max = 5000000),
            'kredit' => $this->faker->randomElement($array = array('DA', 'NE')),
            'investitor_id' => Investitor::factory(),
            'startup_id' => Startup::factory(),
        ];
    }
}
