<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Long Socks', 'description' => '12inch long shocks', 'price' => 5, 'active' => true, 'product_category_id' => 2, 'created_at' => now()->subYears(4), 'updated_at' => now()],
            ['name' => 'Wireless Mouse', 'description' => 'Bluetooth mouse', 'price' => 30, 'active' => true, 'product_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Wool Socks', 'description' => 'Warm wool socks', 'price' => 10, 'active' => true, 'product_category_id' => 2, 'created_at' => now()->subYears(3), 'updated_at' => now()],
            ['name' => 'Novel', 'description' => 'A best-selling novel', 'price' => 15, 'active' => true, 'product_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
