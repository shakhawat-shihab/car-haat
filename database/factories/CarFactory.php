<?php

namespace Database\Factories;

use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "maker_id" => Maker::inRandomOrder()->first()->id,
            "model_id" => function (array $attributes) {
                return Model::where("maker_id", $attributes["maker_id"])->inRandomOrder()->first()->id;
            },
            "year" => fake()->year(),
            "price" => (int) fake()->randomFloat(2, 5, 100) * 100000,
            "vin" => strtoupper(fake()->bothify("??###???###???###")),
            "mileage" => (int) fake()->randomFloat(2, 0, 100000),
            "color" => fake()->safeColorName(),
            "description" => fake()->paragraph(3),
            "address" => fake()->address(),
            "phone" => function (array $attributes) {
                return User::find($attributes["user_id"])->phone;
            },
            "car_type_id" => CarType::inRandomOrder()->first()->id,
            "fuel_type_id" => FuelType::inRandomOrder()->first()->id,
            "user_id" => User::inRandomOrder()->first()->id,
            "city_id" => City::inRandomOrder()->first()->id,
            "published_at" => fake()->optional(weight: 0.9)->dateTimeBetween("-1 month", "+1 day"),
        ];
    }
}
