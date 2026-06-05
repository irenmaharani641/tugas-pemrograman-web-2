<?php

namespace Database\Factories;

use App\Models\Toko;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaksi>
 */
class TransaksiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_transaksi' => 'TRX' . fake()->unique()->numerify('######'),
            'tanggal' => fake()->dateTimeBetween('2020-01-01', '2024-12-31'),
            'total_harga' => fake()->numberBetween(50000, 2000000),
            'metode_pembayaran' => fake()->randomElement(['Cash', 'Transfer', 'QRIS']),
            'status' => fake()->randomElement(['pending', 'success', 'failed']),
            'toko_id' => Toko::inRandomOrder()->first()->id,
        ];
    }
}