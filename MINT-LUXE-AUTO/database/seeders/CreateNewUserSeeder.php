<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateNewUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Tito',
            'email' => 'titotitosimo06@gmail.com',
            'password' => Hash::make('simoah123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
} 