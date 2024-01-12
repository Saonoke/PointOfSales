<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
