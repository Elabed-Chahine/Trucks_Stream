<?php

namespace Database\Factories;

use Dotenv\Util\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str as SupportStr;

class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'thumbnail' => $this->faker->imageUrl($width = 640, $height = 480),
            'bio' => $this->faker->text(100),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => SupportStr::random(10),
        ];
    }
}
