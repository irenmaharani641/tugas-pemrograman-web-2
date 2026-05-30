<?php

namespace Database\Factories;

use App\Models\Toko;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_transaksi' => strtoupper($this->faker->bothify('TRX###')),
            'tanggal' => $this->faker->date(),
            'total_harga' => $this->faker->numberBetween(10000, 2000000),
            'metode_pembayaran' => $this->faker->randomElement(['Cash','Transfer','QRIS']),
            'status' => $this->faker->randomElement(['Selesai','Pending','Batal']),
            // relasi ke Toko
            'toko_id' => Toko::factory(), 
        ];
    }
}
