<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('site_contacts')->insert([
            'email' => 'info@example.com',
            'phone' => '+1234567890',
            'address' => '123 Innovation Street, Tech City, TX 75001',
            'facebook' => 'https://facebook.com/innovationcadet',
            'instagram' => 'https://instagram.com/innovationcadet',
            'youtube' => 'https://youtube.com/innovationcadet',
            'whatsapp' => '+1234567890',
            'twitter' => 'https://twitter.com/innovationcadet',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
