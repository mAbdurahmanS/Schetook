<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AbsenSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'siswa_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'mapel_id' => mt_rand(1,2),
            'waktu_id' => mt_rand(1,2),
            'nilai' => mt_rand(50,99),
            'keterangan' => $this->faker->sentence(5),
            'status_id' => mt_rand(1,3)
        ];
    }
}
