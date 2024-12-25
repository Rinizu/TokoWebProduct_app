<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'user2@gmail.com',
            'password' => Hash::make('user2'),
        ]);
    }
}
