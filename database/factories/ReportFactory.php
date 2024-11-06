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
        $jenisKunjungan = $this->faker->randomElement(['Survei', 'Marketing', 'Kunjungan']);
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'nasabah_id' => Nasabah::inRandomOrder()->first()->id,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'lokasi_kunjungan' => $this->faker->address,
            'keterangan' => $this->faker->text('100'),
            'foto' => 'https://auto2000.co.id/berita-dan-tips/_next/image?url=https%3A%2F%2Fastradigitaldigiroomuat.blob.core.windows.net%2Fstorage-uat-001%2Fjenis-mobil-listrik.png&w=800&q=75',
            'jenis_kunjungan' => $jenisKunjungan,
            'kolek_lap' => $jenisKunjungan === 'Kunjungan'
                ? $this->faker->randomElement(['KOL 1', 'KOL 2', 'KOL 3', 'KOL 4', 'KOL 5'])
                : null, // Mengisi kolek_lap hanya jika jenis_kunjungan adalah 'Kunjungan'
        ];
    }
}
