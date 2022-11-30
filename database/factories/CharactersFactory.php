<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\characters>
 */
class CharactersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'description' => $this->faker->lastName(),
            'user_id' => $this->faker->unique()->numberBetween(1, 50),
            'classe' => $this->faker->randomElement(['Guerrier', 'buyer']),
            'pv' => $this->faker-> numberBetween(0, 15),
            'magie' => $this->faker-> numberBetween(0, 15),
            'force' => $this->faker-> numberBetween(0, 15),
            'agility' => $this->faker-> numberBetween(0, 15),
            'intelligence' => $this->faker-> numberBetween(0, 15),
        ];
    }
}
