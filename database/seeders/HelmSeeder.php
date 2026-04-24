<?php

namespace Database\Seeders;

use App\Models\helm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HelmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        helm::factory()->count(100)->create();
        
        
    }
}
