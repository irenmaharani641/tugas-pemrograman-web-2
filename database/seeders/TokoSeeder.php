<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    public function run(): void
    {
      Toko::create(['nama' => 'Toko Makmur', 'alamat' => 'Jl. Sudirman No. 1, Jakarta', 'pemilik' => 'Budi Santoso']);
        Toko::create(['nama' => 'Toko Sejahtera', 'alamat' => 'Jl. Gatot Subroto No. 5, Bandung', 'pemilik' => 'Siti Rahayu']);
        Toko::create(['nama' => 'Toko Maju Jaya', 'alamat' => 'Jl. Ahmad Yani No. 10, Surabaya', 'pemilik' => 'Agus Wijaya']);
        Toko::create(['nama' => 'Toko Berkah', 'alamat' => 'Jl. Diponegoro No. 3, Yogyakarta', 'pemilik' => 'Dewi Lestari']);
        Toko::create(['nama' => 'Toko Abadi', 'alamat' => 'Jl. Imam Bonjol No. 7, Semarang', 'pemilik' => 'Eko Prasetyo']);
        Toko::create(['nama' => 'Toko Mandiri', 'alamat' => 'Jl. Cut Nyak Dien No. 12, Medan', 'pemilik' => 'Fitri Handayani']);
    }
}