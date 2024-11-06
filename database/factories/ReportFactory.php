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
            'user_id' => User::inRandomOrder()->first()->id,
            'nasabah_id' => Nasabah::inRandomOrder()->first()->id,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'lokasi_kunjungan' => $this->faker->address,
            'keterangan' => $this->faker->text('20'),
            'foto' => $this->faker->imageUrl(),
            'jenis_kunjungan' => $this->faker->randomElement(['Survei', 'Marketing', 'Kunjungan']),
        ];
    }
}
