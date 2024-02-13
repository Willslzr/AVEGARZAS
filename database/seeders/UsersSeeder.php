<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'prueba 1',
            'email' => 'prueba@gmail.com',
            'password' => Hash::make('12345678'), // El password se guarda encriptado
            'admin' => true,
        ]);
    }
}
