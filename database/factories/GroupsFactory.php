<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\groups>
 */
class GroupsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'user_id' => $this->faker->unique()->numberBetween(1,50),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'number' => $this->faker->randomElement(['5', '10', '20', '25','30']),

        ];
    }
}
