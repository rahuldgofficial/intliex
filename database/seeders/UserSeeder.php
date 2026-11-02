<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // For production, you should create users via the UI or a custom artisan command.
        // If this runs, it will create a disabled placeholder or use a secure random password.
        User::firstOrCreate(
            ['email' => 'admin@intliex.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make(\Illuminate\Support\Str::random(32)), // Secure random string
                'role' => 'super-admin',
                'email_verified_at' => now(),
            ]
        );
    }
}
