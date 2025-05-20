<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin Role
        User::create([
            'name' => 'Admin Perpustakaan',
            'username' => 'admin',
            'email' => 'admin@sipus.com',
            'password' => Hash::make('password'), 
            'role' => 'admin',
            'identifier' => '56237772990', 
            'phone' => '081234567890',
            'avatar' => null,
        ]);

        // User Role
        User::create([
            'name' => 'Tubagus Farhan Nur Hakim',
            'username' => 'farhan',
            'email' => 'mahasiswa1@sipus.com',
            'password' => Hash::make('password'), 
            'role' => 'user',
            'identifier' => '221091750027',
            'phone' => '081345678901',
            'avatar' => null,
        ]);

        // User Role
        User::create([
            'name' => 'Tubagus Tirta Nur Gilba',
            'username' => 'gilba',
            'email' => 'mahasiswa2@sipus.com',
            'password' => Hash::make('password'), 
            'role' => 'user',
            'identifier' => '221091750028',
            'phone' => '081345678201',
            'avatar' => null,
        ]);
    }
}
