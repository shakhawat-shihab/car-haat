<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarImage>
 */
class CarImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image_path" => $this->faker->imageUrl(640, 480, 'cars', true),
            "position" => function(array $attributes) {
                return Car::find($attributes['car_id'])->images()->count() + 1;
            }
        ];
    }
}
