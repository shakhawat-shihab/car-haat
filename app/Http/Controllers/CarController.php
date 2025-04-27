<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(1)
            ->cars()
            ->with([
                "primaryImage",
                "images",
                "features",
                "carType",
                "fuelType",
                "maker",
                "city"
            ])
            ->paginate(10);
        // ->withPath("/users/cars")
        // ->appends(['sort' => 'price'])
        // fragment("description");
        return view('car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('car.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show', ["carDetails" => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        return view('car.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view('car.destroy');
    }

    /**
     * Search for a car by ID.
     */
    public function search()
    {
        $query = Car::where("published_at", "<>", null)
            ->with([
                "primaryImage",
                "images",
                "features",
                "carType",
                "fuelType",
                "maker",
                "city"
            ])
            ->orderBy("published_at", "desc");

        // $query->join('cities', 'cars.city_id', '=', 'cities.id')
        //     ->where('cities.state_id', 2);

        // $query->select('cars.*', 'cities.name as city_name');

        $carCount = $query->count();

        $cars = $query->paginate(9);
        // dump($cars);

        $carModels = CarModel::all();
        // dump($carModels);

        return view('car.search', ["cars" => $cars, "carCount" => $carCount, "carModels" => $carModels]);
    }

    public function watchList()
    {
        $favCars = User::find(4)->favoriteCars()
            ->with([
                "primaryImage",
                "images",
                "features",
                "carType",
                "fuelType",
                "maker",
                "city"
            ])->paginate(10);

        return view('car.watchlist', ["cars" => $favCars]);
    }
}
