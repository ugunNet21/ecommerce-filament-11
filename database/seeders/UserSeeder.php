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
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Manager',
            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Customer',
            ],
            [
                'name' => 'Vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Vendor',
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Guest',
            ],
        ];

        // Create users and assign roles
        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
            ]);

            $user->assignRole($userData['role']);
        }
    }
}
