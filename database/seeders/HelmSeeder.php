<?php

namespace Database\Seeders;

use App\Models\Toko;
use App\Models\Helm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HelmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Helm Full Face KYT', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 450000, 'stok' => 12],
            ['nama' => 'Helm Half Face AGV', 'ukuran' => 'L', 'warna' => 'Hitam', 'harga' => 300000, 'stok' => 15],
            ['nama' => 'Helm Modular Shoei', 'ukuran' => 'XL', 'warna' => 'Biru', 'harga' => 550000, 'stok' => 8],
            ['nama' => 'Helm Full Face Arai', 'ukuran' => 'M', 'warna' => 'Kuning', 'harga' => 480000, 'stok' => 10],
            ['nama' => 'Helm Half Face Bell', 'ukuran' => 'L', 'warna' => 'Putih', 'harga' => 280000, 'stok' => 20],
            ['nama' => 'Helm Modular HJC', 'ukuran' => 'M', 'warna' => 'Oranye', 'harga' => 520000, 'stok' => 7],
            ['nama' => 'Helm Full Face Spada', 'ukuran' => 'L', 'warna' => 'Hitam', 'harga' => 420000, 'stok' => 14],
            ['nama' => 'Helm Half Face Nolan', 'ukuran' => 'XL', 'warna' => 'Silver', 'harga' => 310000, 'stok' => 18],
            ['nama' => 'Helm Modular Schuberth', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 580000, 'stok' => 5],
            ['nama' => 'Helm Full Face Premier', 'ukuran' => 'L', 'warna' => 'Biru', 'harga' => 490000, 'stok' => 11],
            ['nama' => 'Helm Half Face Shark', 'ukuran' => 'M', 'warna' => 'Hijau', 'harga' => 290000, 'stok' => 16],
            ['nama' => 'Helm Modular Zeus', 'ukuran' => 'XL', 'warna' => 'Emas', 'harga' => 540000, 'stok' => 9],
            ['nama' => 'Helm Full Face Caberg', 'ukuran' => 'M', 'warna' => 'Ungu', 'harga' => 460000, 'stok' => 13],
            ['nama' => 'Helm Half Face Beon', 'ukuran' => 'L', 'warna' => 'Cokelat', 'harga' => 270000, 'stok' => 22],
            ['nama' => 'Helm Modular LS2', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 500000, 'stok' => 10],
            ['nama' => 'Helm Full Face Vemar', 'ukuran' => 'XL', 'warna' => 'Hitam', 'harga' => 440000, 'stok' => 12],
            ['nama' => 'Helm Half Face Lazer', 'ukuran' => 'M', 'warna' => 'Biru', 'harga' => 320000, 'stok' => 17],
            ['nama' => 'Helm Modular MT', 'ukuran' => 'L', 'warna' => 'Putih', 'harga' => 530000, 'stok' => 8],
            ['nama' => 'Helm Full Face HHRO', 'ukuran' => 'M', 'warna' => 'Kuning', 'harga' => 470000, 'stok' => 11],
            ['nama' => 'Helm Half Face ILM', 'ukuran' => 'XL', 'warna' => 'Merah', 'harga' => 300000, 'stok' => 19],
            ['nama' => 'Helm Modular Torq', 'ukuran' => 'M', 'warna' => 'Oranye', 'harga' => 550000, 'stok' => 6],
            ['nama' => 'Helm Full Face Speed', 'ukuran' => 'L', 'warna' => 'Hitam', 'harga' => 410000, 'stok' => 14],
            ['nama' => 'Helm Half Face Viper', 'ukuran' => 'M', 'warna' => 'Silver', 'harga' => 285000, 'stok' => 21],
            ['nama' => 'Helm Modular Steelbird', 'ukuran' => 'XL', 'warna' => 'Biru', 'harga' => 570000, 'stok' => 4],
            ['nama' => 'Helm Full Face Axor', 'ukuran' => 'M', 'warna' => 'Hijau', 'harga' => 455000, 'stok' => 13],
            ['nama' => 'Helm Half Face Vega', 'ukuran' => 'L', 'warna' => 'Emas', 'harga' => 295000, 'stok' => 18],
            ['nama' => 'Helm Modular Studds', 'ukuran' => 'M', 'warna' => 'Ungu', 'harga' => 515000, 'stok' => 9],
            ['nama' => 'Helm Full Face Vroom', 'ukuran' => 'XL', 'warna' => 'Cokelat', 'harga' => 430000, 'stok' => 15],
            ['nama' => 'Helm Half Face Wintex', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 310000, 'stok' => 16],
            ['nama' => 'Helm Modular Fox', 'ukuran' => 'L', 'warna' => 'Hitam', 'harga' => 560000, 'stok' => 7],
            ['nama' => 'Helm Full Face Helm KBC', 'ukuran' => 'M', 'warna' => 'Biru', 'harga' => 485000, 'stok' => 10],
            ['nama' => 'Helm Half Face Rookie', 'ukuran' => 'XL', 'warna' => 'Putih', 'harga' => 275000, 'stok' => 23],
            ['nama' => 'Helm Modular Pro', 'ukuran' => 'M', 'warna' => 'Kuning', 'harga' => 545000, 'stok' => 8],
            ['nama' => 'Helm Full Face Classic', 'ukuran' => 'L', 'warna' => 'Oranye', 'harga' => 420000, 'stok' => 12],
            ['nama' => 'Helm Half Face Premium', 'ukuran' => 'M', 'warna' => 'Silver', 'harga' => 305000, 'stok' => 17],
            ['nama' => 'Helm Modular Elite', 'ukuran' => 'XL', 'warna' => 'Merah', 'harga' => 575000, 'stok' => 5],
            ['nama' => 'Helm Full Face Deluxe', 'ukuran' => 'M', 'warna' => 'Hijau', 'harga' => 465000, 'stok' => 11],
            ['nama' => 'Helm Half Face Standard', 'ukuran' => 'L', 'warna' => 'Biru', 'harga' => 280000, 'stok' => 20],
            ['nama' => 'Helm Modular Sport', 'ukuran' => 'M', 'warna' => 'Emas', 'harga' => 530000, 'stok' => 9],
            ['nama' => 'Helm Full Face Racing', 'ukuran' => 'XL', 'warna' => 'Ungu', 'harga' => 440000, 'stok' => 13],
            ['nama' => 'Helm Half Face Tour', 'ukuran' => 'M', 'warna' => 'Cokelat', 'harga' => 290000, 'stok' => 19],
            ['nama' => 'Helm Modular Cross', 'ukuran' => 'L', 'warna' => 'Hitam', 'harga' => 555000, 'stok' => 7],
            ['nama' => 'Helm Full Face Urban', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 475000, 'stok' => 10],
            ['nama' => 'Helm Half Face City', 'ukuran' => 'XL', 'warna' => 'Putih', 'harga' => 270000, 'stok' => 24],
            ['nama' => 'Helm Modular Extreme', 'ukuran' => 'M', 'warna' => 'Biru', 'harga' => 540000, 'stok' => 8],
            ['nama' => 'Helm Full Face Adventure', 'ukuran' => 'L', 'warna' => 'Kuning', 'harga' => 430000, 'stok' => 14],
            ['nama' => 'Helm Half Face Cruiser', 'ukuran' => 'M', 'warna' => 'Silver', 'harga' => 300000, 'stok' => 18],
            ['nama' => 'Helm Modular Retro', 'ukuran' => 'XL', 'warna' => 'Oranye', 'harga' => 565000, 'stok' => 6],
            ['nama' => 'Helm Full Face Vintage', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 455000, 'stok' => 12],
            ['nama' => 'Helm Half Face Classic Ride', 'ukuran' => 'L', 'warna' => 'Hijau', 'harga' => 285000, 'stok' => 21],
            ['nama' => 'Helm Modular Future', 'ukuran' => 'M', 'warna' => 'Biru', 'harga' => 535000, 'stok' => 9],
            ['nama' => 'Helm Full Face Retro Speed', 'ukuran' => 'XL', 'warna' => 'Emas', 'harga' => 445000, 'stok' => 13],
            ['nama' => 'Helm Half Face Night', 'ukuran' => 'M', 'warna' => 'Ungu', 'harga' => 295000, 'stok' => 20],
            ['nama' => 'Helm Modular Day', 'ukuran' => 'L', 'warna' => 'Cokelat', 'harga' => 550000, 'stok' => 8],
            ['nama' => 'Helm Full Face Dream', 'ukuran' => 'M', 'warna' => 'Hitam', 'harga' => 480000, 'stok' => 11],
            ['nama' => 'Helm Half Face Vision', 'ukuran' => 'XL', 'warna' => 'Merah', 'harga' => 310000, 'stok' => 17],
            ['nama' => 'Helm Modular Path', 'ukuran' => 'M', 'warna' => 'Putih', 'harga' => 545000, 'stok' => 7],
            ['nama' => 'Helm Full Face Journey', 'ukuran' => 'L', 'warna' => 'Biru', 'harga' => 425000, 'stok' => 14],
            ['nama' => 'Helm Half Face Horizon', 'ukuran' => 'M', 'warna' => 'Kuning', 'harga' => 280000, 'stok' => 22],
            ['nama' => 'Helm Modular Skyline', 'ukuran' => 'XL', 'warna' => 'Silver', 'harga' => 570000, 'stok' => 5],
            ['nama' => 'Helm Full Face Twilight', 'ukuran' => 'M', 'warna' => 'Oranye', 'harga' => 470000, 'stok' => 10],
            ['nama' => 'Helm Half Face Dawn', 'ukuran' => 'L', 'warna' => 'Merah', 'harga' => 290000, 'stok' => 19],
            ['nama' => 'Helm Modular Sunset', 'ukuran' => 'M', 'warna' => 'Hijau', 'harga' => 540000, 'stok' => 9],
            ['nama' => 'Helm Full Face Midnight', 'ukuran' => 'XL', 'warna' => 'Biru', 'harga' => 450000, 'stok' => 12],
            ['nama' => 'Helm Half Face Bright', 'ukuran' => 'M', 'warna' => 'Emas', 'harga' => 305000, 'stok' => 18],
            ['nama' => 'Helm Modular Dark', 'ukuran' => 'L', 'warna' => 'Ungu', 'harga' => 555000, 'stok' => 7],
            ['nama' => 'Helm Full Face Light', 'ukuran' => 'M', 'warna' => 'Cokelat', 'harga' => 435000, 'stok' => 13],
            ['nama' => 'Helm Half Face Shadow', 'ukuran' => 'XL', 'warna' => 'Hitam', 'harga' => 275000, 'stok' => 25],
            ['nama' => 'Helm Modular Eclipse', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 535000, 'stok' => 8],
            ['nama' => 'Helm Full Face Nova', 'ukuran' => 'L', 'warna' => 'Putih', 'harga' => 440000, 'stok' => 11],
            ['nama' => 'Helm Half Face Stellar', 'ukuran' => 'M', 'warna' => 'Biru', 'harga' => 300000, 'stok' => 20],
            ['nama' => 'Helm Modular Cosmic', 'ukuran' => 'XL', 'warna' => 'Kuning', 'harga' => 565000, 'stok' => 6],
            ['nama' => 'Helm Full Face Galaxy', 'ukuran' => 'M', 'warna' => 'Silver', 'harga' => 465000, 'stok' => 10],
            ['nama' => 'Helm Half Face Universe', 'ukuran' => 'L', 'warna' => 'Oranye', 'harga' => 285000, 'stok' => 21],
            ['nama' => 'Helm Modular Infinite', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 550000, 'stok' => 8],
            ['nama' => 'Helm Full Face Eternal', 'ukuran' => 'XL', 'warna' => 'Hijau', 'harga' => 445000, 'stok' => 12],
            ['nama' => 'Helm Half Face Phoenix', 'ukuran' => 'M', 'warna' => 'Biru', 'harga' => 310000, 'stok' => 17],
            ['nama' => 'Helm Modular Dragon', 'ukuran' => 'L', 'warna' => 'Emas', 'harga' => 560000, 'stok' => 7],
            ['nama' => 'Helm Full Face Tiger', 'ukuran' => 'M', 'warna' => 'Ungu', 'harga' => 475000, 'stok' => 9],
            ['nama' => 'Helm Half Face Eagle', 'ukuran' => 'XL', 'warna' => 'Cokelat', 'harga' => 270000, 'stok' => 26],
            ['nama' => 'Helm Modular Lion', 'ukuran' => 'M', 'warna' => 'Hitam', 'harga' => 545000, 'stok' => 8],
            ['nama' => 'Helm Full Face Wolf', 'ukuran' => 'L', 'warna' => 'Merah', 'harga' => 430000, 'stok' => 13],
            ['nama' => 'Helm Half Face Bear', 'ukuran' => 'M', 'warna' => 'Putih', 'harga' => 295000, 'stok' => 19],
            ['nama' => 'Helm Modular Shark', 'ukuran' => 'XL', 'warna' => 'Biru', 'harga' => 570000, 'stok' => 6],
            ['nama' => 'Helm Full Face Falcon', 'ukuran' => 'M', 'warna' => 'Kuning', 'harga' => 460000, 'stok' => 11],
            ['nama' => 'Helm Half Face Hawk', 'ukuran' => 'L', 'warna' => 'Silver', 'harga' => 280000, 'stok' => 22],
            ['nama' => 'Helm Modular Raven', 'ukuran' => 'M', 'warna' => 'Oranye', 'harga' => 540000, 'stok' => 9],
            ['nama' => 'Helm Full Face Owl', 'ukuran' => 'XL', 'warna' => 'Merah', 'harga' => 450000, 'stok' => 12],
            ['nama' => 'Helm Half Face Dove', 'ukuran' => 'M', 'warna' => 'Hijau', 'harga' => 315000, 'stok' => 18],
            ['nama' => 'Helm Modular Swan', 'ukuran' => 'L', 'warna' => 'Biru', 'harga' => 555000, 'stok' => 7],
            ['nama' => 'Helm Full Face Crane', 'ukuran' => 'M', 'warna' => 'Emas', 'harga' => 435000, 'stok' => 13],
            ['nama' => 'Helm Half Face Stork', 'ukuran' => 'XL', 'warna' => 'Ungu', 'harga' => 275000, 'stok' => 27],
            ['nama' => 'Helm Modular Pelican', 'ukuran' => 'M', 'warna' => 'Cokelat', 'harga' => 535000, 'stok' => 8],
            ['nama' => 'Helm Full Face Penguin', 'ukuran' => 'L', 'warna' => 'Hitam', 'harga' => 440000, 'stok' => 10],
            ['nama' => 'Helm Half Face Ostrich', 'ukuran' => 'M', 'warna' => 'Merah', 'harga' => 300000, 'stok' => 20],
            ['nama' => 'Helm Modular Peacock', 'ukuran' => 'XL', 'warna' => 'Putih', 'harga' => 565000, 'stok' => 6],
            ['nama' => 'Helm Full Face Parrot', 'ukuran' => 'M', 'warna' => 'Biru', 'harga' => 470000, 'stok' => 9],
        ];

        foreach ($data as $item) {
            Helm::create($item);
        }
    }
}