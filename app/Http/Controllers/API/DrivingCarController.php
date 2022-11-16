<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\DrivingCar\StoreRequest;
use App\Http\Requests\API\DrivingCar\UpdateRequest;
use App\Http\Resources\API\DrivingCarResource;
use App\Models\DrivingCar;
use App\Service\DrivingCarService;
use Illuminate\Http\Request;

class DrivingCarController extends Controller
{
    private $service;

    public function __construct(DrivingCarService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $drivingCarArr = DrivingCar::all();
        return DrivingCarResource::collection($drivingCarArr);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $result = $this->service->store($data);
        return $result;
    }

    public function destroy(DrivingCar $drivingCar)
    {
        $drivingCar->delete();
        return response([]);
    }

    public function update(DrivingCar $drivingCar)
    {
        $result = $drivingCar->update([
            'status' => 0
        ]);
        return $result;
    }

    public function show(DrivingCar $drivingCar)
    {
        return new DrivingCarResource($drivingCar);
    }
}
