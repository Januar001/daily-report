<?php

namespace Database\Factories;

use App\Models\Nasabah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NasabahFactory extends Factory
{
    protected $model = Nasabah::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'CIF' => $this->faker->unique()->numerify('CIF###'),
            'alamat' => $this->faker->address,
            'AO' => $this->faker->name,
            'Kolektibilitas' => $this->faker->randomElement(['KOL 1', 'KOL 2', 'KOL 3', 'KOL 4','KOL 5']),
        ];
    }
}
