<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12121212'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('12121212'),
            'email_verified_at' => now(),
        ]);
    }
}
