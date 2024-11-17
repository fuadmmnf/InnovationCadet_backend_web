<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'InnovationCadet',
            'email' => 'admin123@gmail.com',
            'password' => Hash::make('secret'), // Encrypt the password
        ]);
    }
}