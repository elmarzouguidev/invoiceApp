<?php

namespace Database\Factories\CRM;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company,
            'telephone' => $this->faker->unique()->phoneNumber,
            'contact' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'details' => $this->faker->words(5, true),
            'address' => $this->faker->address(),
            'ice' => $this->faker->unique()->regexify('[0-9]{15}'),
            'rc' => $this->faker->unique()->regexify('[0-9]{5}'),
        ];
    }
}
