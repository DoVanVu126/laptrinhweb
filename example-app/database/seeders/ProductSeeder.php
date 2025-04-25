<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 100; $i++) {
            DB::table('products')->insert([
                [
                    'name' => 'product '.$i,
                    'image' => 'image' .$i. '.jpg',
                    'price' => rand(10000, 1000000),
                    'quantity' => rand(1, 3),
                    'description' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
