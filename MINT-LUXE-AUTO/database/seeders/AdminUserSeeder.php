<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Check if admin user already exists
        if (!DB::table('users')->where('email', 'admin@mintluxeauto.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@mintluxeauto.com',
                'password' => Hash::make('password123'), // Change this to a secure password
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Add the new user
        if (!DB::table('users')->where('email', 'titotitosimo06@gmail.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'Tito',
                'email' => 'titotitosimo06@gmail.com',
                'password' => Hash::make('password123'), // Change this to your desired password
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
} 