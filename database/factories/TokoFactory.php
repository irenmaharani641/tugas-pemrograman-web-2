<?php

namespace Database\Factories;

use App\Models\Toko;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Toko>
 */
class TokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_toko' => $this->faker->company(),
            'alamat' => $this->faker->address(),
            'no_telepon' => $this->faker->phoneNumber(),
        ];
    }
}
