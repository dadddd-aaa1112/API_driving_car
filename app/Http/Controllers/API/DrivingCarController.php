<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\DrivingCarResource;
use App\Models\ClientCar;
use Illuminate\Http\Request;

class DrivingCarController extends Controller
{
    public function index() {
        $drivingCarArr = ClientCar::all();
        return DrivingCarResource::collection($drivingCarArr);
    }
}
