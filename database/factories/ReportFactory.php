<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Report;
use App\Models\Nasabah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReportFactory extends Factory
{
    protected $model = Report::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'nasabah_id' => Nasabah::factory(),
            'date_created' => now(),
        ];
    }
}
