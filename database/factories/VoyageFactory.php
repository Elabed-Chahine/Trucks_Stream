<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoyageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'driverid' => Driver::Factory()->create(),
            'shipmentid' => Shipment::Factory()->create(),
            'price' => $this->faker->numberBetween(100,2500),
            'thumbnail' => $this->faker->imageUrl($width = 640, $height = 480),
            'description' => $this->faker->sentence(),
        ];
        
    }
}
