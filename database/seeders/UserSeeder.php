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
        User::create([
            'code' => 'USER001',
            'nama' => 'John Doe',
            'no_hp' => '(+62) 123 4567 890',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password123'), // Menggunakan hash untuk password
            'jabatan' => 'Account Officer',
        ]);

        User::create([
            'code' => 'USER002',
            'nama' => 'Jane Smith',
            'no_hp' => '(+62) 987 6543 210',
            'email' => 'janesmith@example.com',
            'password' => Hash::make('password123'),
            'jabatan' => 'Account Officer',
        ]);

        User::create([
            'code' => 'USER003',
            'nama' => 'Michael Johnson',
            'no_hp' => '(+62) 321 6547 890',
            'email' => 'michaeljohnson@example.com',
            'password' => Hash::make('password123'),
            'jabatan' => 'Account Officer',
        ]);

        User::create([
            'code' => 'USER004',
            'nama' => 'Sarah Williams',
            'no_hp' => '(+62) 456 7890 123',
            'email' => 'sarahwilliams@example.com',
            'password' => Hash::make('password123'),
            'jabatan' => 'Account Officer',
        ]);

        User::create([
            'code' => 'USER005',
            'nama' => 'David Brown',
            'no_hp' => '(+62) 567 8901 234',
            'email' => 'davidbrown@example.com',
            'password' => Hash::make('password123'),
            'jabatan' => 'Admin',
        ]);
    }
}
