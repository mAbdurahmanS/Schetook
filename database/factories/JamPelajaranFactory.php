<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JamPelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hari' => $this->faker->date(),
            'mapel_id' => mt_rand(1,3),
            'waktu_id' => mt_rand(1,4),
            'kelas_id' => mt_rand(1,3),
            'guru_id' => mt_rand(1,2)

        ];
    }
}
