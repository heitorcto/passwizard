<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Container>
 */
class ContainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->name(),
            'email' => fake()->word() . fake()->randomNumber(5) . 'gmail.com',
            'password' => '12345678',
            'observation' => fake()->text(),
            'user_id' => fake()->numberBetween(1, 20)
        ];
    }
}
