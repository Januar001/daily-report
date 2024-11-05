<?php

namespace Database\Factories;

use App\Models\Report;
use App\Models\DetailReport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetailReportFactory extends Factory
{
    protected $model = DetailReport::class;

    public function definition()
    {
        return [
            'report_id' => Report::factory(),
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'lokasi_kunjungan' => $this->faker->address,
            'keterangan' => $this->faker->text,
            'foto' => $this->faker->imageUrl(),
            'jenis_kunjungan' => $this->faker->randomElement(['Survei', 'Mareketing', 'Kunjungan']),
            'date_created' => now(),
        ];
    }
}
