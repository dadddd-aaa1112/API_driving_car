<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\DrivingCar\StoreRequest;
use App\Http\Requests\API\DrivingCar\UpdateRequest;
use App\Http\Resources\API\DrivingCarResource;
use App\Models\DrivingCar;
use Illuminate\Http\Request;

class DrivingCarController extends Controller
{
    public function index() {
        $drivingCarArr = DrivingCar::all();
        return DrivingCarResource::collection($drivingCarArr);
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $drivingCar = DrivingCar::create($data);
        return $drivingCar;
    }

    public function destroy(DrivingCar $drivingCar) {
        $drivingCar->delete();
        return response([]);
    }

    public function update(UpdateRequest $updateRequest, DrivingCar $drivingCar) {
        $data = $updateRequest->validated();
        $result = $drivingCar->update($data);
        return $result;
    }

    public function show(DrivingCar $drivingCar) {
        return new DrivingCarResource($drivingCar);
    }
}
