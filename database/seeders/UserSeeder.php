<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin SIAKAD',
            'email' => 'admin@siakad.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Guru Matematika',
            'email' => 'guru@siakad.com',
            'password' => Hash::make('password'),
            'role' => 'guru'
        ]);

        User::create([
            'name' => 'Siswa SMA Markus',
            'email' => 'siswa@siakad.com',
            'password' => Hash::make('password'),
            'role' => 'siswa'
        ]);
    }
}
