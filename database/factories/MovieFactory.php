<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// TODO: 最初からファイルが存在する Station06の時点ではカラムの構成が異なるため、削除しても良いのでは？
// TODO: 問題文内「FakerのimageUrl()使ってサンプル画像を表示してみましょう！」に脱字
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word,
            'image_url' => $this->faker->imageUrl(),
        ];
    }
}
