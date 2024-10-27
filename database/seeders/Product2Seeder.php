<?php

namespace Database\Seeders;

use App\Models\Product2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product2::factory(10)->create();
    }
}
