<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {



        // $car = Car::find(1);
        // dump($car->features);
        // dump($car->primaryImage);
        // dump($car->images);

        // add images to car
        // $car = Car::find(1);
        // $newImage=new CarImage([
        //     'image_path'=>'image.jpg',
        //     'position'=>1,
        // ]);
        // $car->images()->save($newImage);

        // dump($car);
        // dump($car->carType);

        // $carType = CarType::where("name", "Sedan")->first();
        // dump($carType->cars);
        // $cars = Car::whereBelongsTo($carType)->get();


        // $car = Car::find(1);
        // dump($car->favoredUsers);


        // $user=User::find(1);
        // dump($user->favoriteCars);

        // $user=User::find(1);
        // $user->favoriteCars()->attach([1,2]);



        /** FACTORIES */
        // $maker = Maker::factory(2)->create();
        // dd($maker);

        // User::factory(5)->sequence(['name' => "shihab"], ["name" => "Fahim"])->create();

        // User::factory(5)
        //     ->sequence(fn(Sequence $sequence) => [
        //         'name' => "Name" . $sequence->index
        //     ])
        //     ->create();

        // User::factory(5)
        //     ->trashed()
        //     ->create();

        // User::factory(3)
        // ->afterCreating(function (User $user) {
        //     dump($user->name);
        // })
        // ->create();


        // State::factory()
        //     ->count(5)
        //     ->hasCities(2)
        //     ->create();

        // Model::factory()
        //     ->count(5)
        //     ->forMaker()
        //     ->create();

        // $result = User::factory()
        //     ->has(Car::factory()->count(3), "favoriteCars")
        //     ->create();

        // dump($result->favoriteCars);

        return view('index');
    }
}
