<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    //

    public function getAllCars() {
        return response()->json(Car::all(), 200);
    }

    public function getOneCar($id) {
        $car = Car::find($id);

        if(is_null($car)) {
            return response()->json(['message' => 'Car Not Found'], 404);
        }

        return response()->json($car, 200);
    }

    public function createCar(Request $request) {
        $car = Car::create($request);

        if(is_null($car)) {
            return response()->json(['message' => 'Car Could Not Be Added'], 204);
        }

        return response()->json($car, 201);
    }

    public function deleteCar($id) {

    }

    public function updateCar($request, $id) {

    }
}
