<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Report;
use App\Models\Nasabah;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::factory(5)->create();
        Nasabah::factory(15)->create();
        Report::factory(100)->create();
    }
}
