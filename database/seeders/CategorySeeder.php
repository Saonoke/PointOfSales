<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category')->insert([
                ['category_name' => 'Makanan'],
                ['category_name' => 'Minuman'],
                ['category_name' => 'Produk Segar'],
                ['category_name' => 'Ibu & Anak'],
                ['category_name' => 'Kesehatan & Kecantikan'],
                ['category_name' => 'Kebutuhan Rumah Tangga']
        ]);
    }
}
