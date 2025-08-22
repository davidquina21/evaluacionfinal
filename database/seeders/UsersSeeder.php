<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

            [
                'name' => 'Publicador',
                'email' => 'auroraA@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'publicador',
            ];
             [
                'name' => 'Comentarista',
                'email' => 'auroraB@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'comentarista',
            ];
    }
}
