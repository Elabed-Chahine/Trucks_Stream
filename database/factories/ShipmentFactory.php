<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::Factory()->create(),
            'material' => $this->faker->sentence(),
            'weight' => $this->faker->numberBetween(100,5000),
            'lieu_depart' => $this->faker->word(),
            'lieu_arrive' => $this->faker->word(),
            'thumbnail'=>$this->faker->imageUrl($width = 640, $height = 480),
            'description' => $this->faker->sentence(),
        ];
    }
}
