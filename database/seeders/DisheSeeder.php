<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dishe;

class DisheSeeder extends Seeder
{
    public function run(): void
    {
        Dishe::factory()->count(10)->create();
    }
}