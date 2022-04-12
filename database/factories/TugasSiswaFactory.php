<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TugasSiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'desc' => $this->faker->paragraph(),
            'guru_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,2)
        ];
    }
}
