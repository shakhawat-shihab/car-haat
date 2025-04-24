<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\User;
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




        return view('index');
    }
}
