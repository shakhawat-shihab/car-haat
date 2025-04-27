<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('car.index');
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
        // $carDetails = Car::where("id", $car->id)
        //     ->with([
        //         "features",
        //         "primaryImage",
        //         "images",
        //         "carType",
        //         "fuelType",
        //         "maker",
        //         "model",
        //         "city",
        //         'user',
        //         "favoriteUsers"
        //     ])
        //     ->first();
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
            ->orderBy("published_at", "desc");
        $carCount = $query->count();
        $cars = $query->limit(9)->get();

        $carModels = CarModel::all();
        // dump($carModels);

        return view('car.search', ["cars" => $cars, "carCount" => $carCount, "carModels" => $carModels]);
    }
}
