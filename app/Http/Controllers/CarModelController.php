<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    function getCarModels()
    {
        $carModels = CarModel::all();

        return response()->json($carModels);
    }
}
