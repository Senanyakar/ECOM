<?php

namespace Database\Factories;

use App\Models\Property;
use Faker\Provider\ar_EG\Text;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $proptypearray = ['Arsa', 'Ev'];
        $catearray = ['Satilik', 'Kiralik'];


        return [
            'user_id' => 1,

            'title' => $this->faker->sentence(3),
            'category' => $catearray[rand(0,1)],
            'keywords' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(15),
            'amenities' => $this->faker->sentence(10),
            'propertytype' => $proptypearray[rand(0,1)],
            'videolink'=> '<iframe src="https://player.vimeo.com/video/73221098?h=0ad075249b" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>',
            'sahibindenlink'=> 'https://www.sahibinden.com',
            'floorplans'=> 'image/RoomSketcher-High-Quality-3D-Floor-Plans.jpg',
            'price' => $this->faker->randomNumber(1),
            'area' => $this->faker->randomNumber(1),
            'baths' => $this->faker->randomNumber(1),
            'beds' => $this->faker->randomNumber(1),
            'garage' => $this->faker->randomNumber(1),
            'location' => $this->faker->sentence(2),
            'moneytype' => '$',
            'image'=> 'image/yCdAn76noLIWg1q5sZHWmkiLlJyfRKrjjAIiXbNC.png',

            'created_at' => $this->faker->dateTime('now') 
        ];
    }
}
