<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// TODO: 最初からあるのでカリキュラムとズレあり
class PracticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(10),
        ];
    }
}
