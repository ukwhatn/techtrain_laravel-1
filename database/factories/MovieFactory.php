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
        $title = $this->faker->unique()->word();
        // #を削除
        $colorCode = substr($this->faker->hexColor(), 1);
        return [
            'title' => $title,
            'image_url' => "https://placehold.jp/${colorCode}/ffffff/150x150.png?text=${title}",
            'published_year' => $this->faker->year(),
            'is_showing' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
        ];
    }
}
