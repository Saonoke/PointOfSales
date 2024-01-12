<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $userData=[
            [
                'name' => 'kou',
                'email' => 'kou@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('asdf')

            ],
            [
                'name' => 'futaba',
                'email' => 'futaba@gmail.com',
                'role' => 'kasir',
                'password' => bcrypt('asdf')

            ]
        ];

        foreach( $userData as $key => $val){
            User::create($val);
        }

    }
}
