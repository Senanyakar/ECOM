<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,

            'title' => $this->faker->sentence(3),
            'keyword' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(15),
            'content1' => $this->faker->sentence(10),
            'status' => "New",
            'category' => $this->faker->sentence(1),
            'ref1' => $this->faker->sentence(2),
            'ref2' => $this->faker->sentence(2),
            'ref1auther' => $this->faker->sentence(10),
            'ref2auther' => $this->faker->sentence(10),

            'content1' => $this->faker->sentence(10),
            'content2' => $this->faker->randomNumber(1),
            'image'=> 'image/5DgeuB07MqmY0y4RqcCzwWBFezm97Pb7UlnuSlSt.jpg',
        ];
    }
}
