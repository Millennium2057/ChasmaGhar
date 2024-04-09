<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Amit',
            'email' => 'mille@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user', // Hash the password
        ]);

        User::create([
            'name' => 'Admin Name',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'), // Hash the password
            'role' => 'admin', // Assign admin role
        ]);
    }
}
