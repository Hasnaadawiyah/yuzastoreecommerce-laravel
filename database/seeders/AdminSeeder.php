<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Membuat akun admin dan user default.
     */
    public function run(): void
    {
        // Admin
        User::updateOrCreate(
            ['email' => 'adminyuzaa@gmail.com'],
            [
                'name' => 'Admin YuzaStore',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        // User
        User::updateOrCreate(
            ['email' => 'yuzaa@gmail.com'],
            [
                'name' => 'User YuzaStore',
                'password' => Hash::make('password123'),
                'role' => 'customer',
            ]
        );
    }
}