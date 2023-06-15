<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'email' => $this->faker->email(),
            'telepon' => $this->faker->phone(),
            'tahun_masuk' => $this->faker->year(),
            'alamat' => $this->faker->city(),
            'foto' => $this->faker->name(),
            'departemen_id' => function () {
                return \App\Models\Departemen::inRandomOrder()->first()->id;
            },
        ];
    }
}
