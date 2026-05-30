<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'kode_transaksi' => strtoupper($this->faker->bothify('TRX###')),
        'tanggal' => $this->faker->date(),
        'total_harga' => $this->faker->numberBetween(10000,2000000),
        'metode_pembayaran' => $this->faker->randomElement(['Cash','Transfer','QRIS']),
        'status' => $this->faker->randomElement(['Selesai','Pending','Batal']),
        'toko_id' => Transaksi::factory(),
        ];
    }
}
