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
            'password' => Hash::make('password'), // Default password
            'role' => 'admin',
            'identifier' => '56237772990', // Example NUPTK
            'phone' => '081234567890',
            'avatar' => null,
        ]);

        // User Role
        User::create([
            'name' => 'Mahasiswa 1',
            'username' => 'mahasiswa1',
            'email' => 'mahasiswa1@sipus.com',
            'password' => Hash::make('password'), // Default password
            'role' => 'user',
            'identifier' => '221091750027', // Example NIM
            'phone' => '081345678901',
            'avatar' => null,
        ]);
    }
}
