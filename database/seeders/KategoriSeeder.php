<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama_kategori' => 'makanan & minuman'
            ],
            [
                'nama_kategori' => 'produk pembersih'
            ],
            [
                'nama_kategori' => 'obat-obatan'
            ]
        ]);
    }
}
