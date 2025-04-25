<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\State;
use App\Models\User;
use App\Models\Maker;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarType::factory()
            ->sequence(
                ['name' => 'Sedan'],
                ['name' => 'Hatchback'],
                ['name' => 'SUV'],
                ['name' => 'Truck'],
                ['name' => 'Van'],
                ['name' => 'Coupe'],
                ['name' => 'Convertible'],
                ['name' => 'Wagon'],
                ['name' => 'Crossover'],
                ['name' => 'Sports Car'],
            )
            ->count(10)
            ->create();

        FuelType::factory()
            ->sequence(
                ['name' => 'Petrol'],
                ['name' => 'Diesel'],
                ['name' => 'Electric'],
                ['name' => 'Hybrid'],
                ['name' => 'Hydrogen'],
            )
            ->count(4)
            ->create();


        $states = [
            'California' => ['Los Angeles', 'San Francisco', 'San Diego'],
            'Texas' => ['Houston', 'Dallas', 'Austin'],
            'New York' => ['New York City', 'Buffalo', 'Rochester'],
            'Florida' => ['Miami', 'Orlando', 'Tampa'],
            'Illinois' => ['Chicago', 'Aurora', 'Naperville'],
        ];

        foreach ($states as $stateName => $cities) {
            State::factory()
                ->state(['name' => $stateName])
                ->has(
                    City::factory()
                        ->count(count($cities))
                        ->sequence(...array_map(fn($city) => ['name' => $city], $cities))
                )
                ->create();
        }

        //similar to state variable makers will be another variable assoicate array
        //  the keys will be maker name and each makers will have array of strig where we will have car models
        $makers = [
            'Toyota' => ['Camry', 'Corolla', 'RAV4'],
            'Honda' => ['Civic', 'Accord', 'CR-V'],
            'Ford' => ['F-150', 'Mustang', 'Explorer'],
            'Chevrolet' => ['Silverado', 'Malibu', 'Equinox'],
            'Nissan' => ['Altima', 'Rogue', 'Sentra'],
        ];



        foreach ($makers as $makerName => $models) {
            Maker::factory()
                ->state(['name' => $makerName])
                ->has(
                    CarModel::factory()
                        ->count(count($models))
                        ->sequence(...array_map(fn($model) => ['name' => $model], $models)),
                        // ->afterCreating(function (CarModel $m) {
                        //     dump($m->name);
                        // }),
                    "carModels"
                )
                ->create();
        }

        User::factory()
            ->count(3)
            ->create();

        User::factory()
            ->count(2)
            ->has(
                Car::factory()
                    ->count(50)
                    ->has(
                        CarImage::factory()
                            ->count(5)
                            ->sequence(
                                fn($sequence) => [
                                    'position' => $sequence->index % 5 + 1,
                                ]
                            )
                            ->sequence(
                                fn($sequence) => [
                                    'image_path' => 'https://example.com/car_image_' . $sequence->index + 1 . '.jpg',
                                ]
                            ),
                        "images"
                    )
                    ->hasFeatures(),
                "favoriteCars"

            )
            ->create();

    }
}
