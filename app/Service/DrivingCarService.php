<?php

namespace App\Service;

use App\Models\DrivingCar;
use Illuminate\Support\Facades\DB;

class DrivingCarService
{
    public function store($data)
    {

        try {
            DB::beginTransaction();
            $clients = DrivingCar::where('client_id', $data['client_id'])->get();
            $cars = DrivingCar::where('car_id', $data['car_id'])->get();

            if (count($clients) > 0) {
                foreach ($clients as $client) {
                    if ($client['status'] === 1) {
                        return response(['клиент еще занят'], 302);
                    }
                }
            }

            if (count($cars) > 0) {
                foreach ($cars as $car) {
                    if ($car['status'] === 1) {
                        return response(['автомобиль еще занят'], 302);
                    }
                }
            }

            $drivingCar = DrivingCar::create([
                'client_id' => $data['client_id'],
                'car_id' => $data['car_id'],
                'status' => 1,
            ]);

            DB::commit();
            return $drivingCar;
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }
}
