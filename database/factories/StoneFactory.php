<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stone>
 */
class StoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(2),
            'keywords'=>$this->faker->sentence(2),
            'type'=>$this->faker->sentence(2),
            'comment'=>$this->faker->sentence(2),
            'material'=>$this->faker->sentence(2),
            'image'=> 'image/KH25qQGBqcSRPZzzZpffEZfaVTGeHdQmAxoI7ja8.jpg',
            'size' => $this->faker->randomNumber(2),
            'price' => $this->faker->randomNumber(3),
        ];
    }
}
