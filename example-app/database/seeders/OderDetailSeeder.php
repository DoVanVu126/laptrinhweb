<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 300; $i++) {
            DB::table('order_detail')->insert([
                [
                    'order_id' => $i,
                    'product_id' => rand(1, 100),
                    'quantity' => rand(1, 3),
                    'notes' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
        }
    }
}
