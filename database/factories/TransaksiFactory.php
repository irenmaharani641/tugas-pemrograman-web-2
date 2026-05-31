<?php

namespace Database\Factories;

use App\Models\Toko;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    public function definition(): array
    {
        return [

    'kode_transaksi' => 'TRX' . $this->faker->unique()->numberBetween(100, 999),
    'tanggal' => $this->faker->dateTimeBetween('2020-01-01', '2024-12-31'),
    'total_harga' => $this->faker->numberBetween(50000, 200000),
    'metode_pembayaran' => $this->faker->randomElement(['Cash', 'Transfer', 'QRIS']),
    'status' => $this->faker->randomElement(['pending', 'success', 'failed']),
    'toko_id' => Toko::inRandomOrder()->first()->id,
];

        
    }
}
