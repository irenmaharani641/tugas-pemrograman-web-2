<?php

namespace Database\Factories;

use App\Models\helm;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelmFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'ukuran' => fake()->numerify('##'),
            'warna' => fake()->name(),
            'harga' => fake()->name(),
            'stok' => fake()->name(),
        ];
    }
}