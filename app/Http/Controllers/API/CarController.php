<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Car\StoreRequest;
use App\Http\Requests\API\Car\UpdateRequest;
use App\Http\Resources\API\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();
        return CarResource::collection($cars);
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $car= Car::create($data);
        return $car;
    }

    public function destroy(Car $car) {
        $car->delete();
        return response([]);
    }

    public function update(UpdateRequest $updateRequest, Car $car) {
        $data = $updateRequest->validated();
        $result = $car->update($data);
        return $result;
    }

    public function show(Car $car) {
        return new CarResource($car);
    }

}
