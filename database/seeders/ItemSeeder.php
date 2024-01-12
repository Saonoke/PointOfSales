<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item')->insert([
            [
                'category_id' => '1',
                'item_name' => 'Nabati wafer' ,
                'price' =>'2000',
                "stock" => '50',
            ],            [
                'category_id' => '2',
                'item_name' => 'Ultramilk UHT 250 ml',
                'price' => '7000',
                "stock" => '30',
            ],            [
                'category_id' => '3',
                'item_name' => 'Semangka kupas',
                'price' => '5500',
                "stock" => '10',
            ],            [
                'category_id' => '4',
                'item_name' => 'Dancow 1+ 250g',
                'price' => '29000',
                "stock" => '5',
            ]
        
        ]);
    }
}
