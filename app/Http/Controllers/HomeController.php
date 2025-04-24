<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //select all cars
        // $cars = Car::get();
        // dump($cars);


        // get published cars
        // $cars = Car::where('published_at', '!=', null)->orderBy('published_at', 'desc')
        //     ->limit(10)
        //     ->get();
        // dump($cars);

        //get first car
        // $car = Car::where('published_at', '!=', null)->first();
        // dump($car);

        // create car data
        // Car::create([
        //     'name' => 'Car 1',
        //     'description' => 'Car 1 description',
        //     'published_at' => now(),
        // ]);

        //create car using save method
        // $car = new Car();
        // $car->name = 'Car 2';
        // $car->description = 'Car 2 description';
        // $car->published_at = now();
        // $car->save();

        //create car using save method
        // $car = new Car();
        // $car->fill($carData)
        // $car->save();

        //create car using save method
        // $car = new Car($carData);
        // $car->save();

        // update car data
        // $car = Car::find(2);
        // $car->price = 180000;
        // $car->save();

        // if filter logic is satisfied, then update otherwise create
        // Car::updateOrCreate([
        //     'id' => 2,
        // ], [
        //     'name' => 'Car 3',
        //     'description' => 'Car 3 description',
        // ]);


        // delete car
        // $car = Car::find(2);
        // $car->delete();

        //delete multiple
        // Car::destroy([1,2,3]);


        return view('index');
    }
}
