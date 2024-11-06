<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Report;
use App\Models\Nasabah;
use App\Models\DetailReport;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::factory(10)->create();
        Nasabah::factory(500)->create();
        Report::factory(10)->create();
        DetailReport::factory(10)->create();
    }
}
