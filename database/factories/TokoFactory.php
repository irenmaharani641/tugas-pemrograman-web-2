<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TokoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => $this->faker->company,
            'alamat' => $this->faker->address,
            'pemilik' => $this->faker->name,
            
        ];
    }
}
