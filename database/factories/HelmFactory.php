<?php

namespace Database\Factories;

use App\Models\helm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<helm>
 */
class HelmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'ukuran' => fake()->numerify(),
            'warna' => fake()->name(),
            'harga' => fake()->numerify(),
            'stok' => fake()->numerify(),
        ];

    }
}
