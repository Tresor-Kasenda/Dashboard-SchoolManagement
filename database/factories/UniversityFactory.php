<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\University>
 */
final class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'initials' => fake()->unique()->regexify('[A-Z]{3}'),
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'code' => $this->faker->unique()->regexify('[A-Z]{3}'),
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
