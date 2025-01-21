<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('product_categories')->insert([
            ['name' => 'Electronics', 'description' => 'Gadgets and devices', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Socks', 'description' => 'Various kinds of socks', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Books', 'description' => 'Fiction and non-fiction books', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
