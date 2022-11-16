<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DrivingCarTest extends TestCase
{

    public static function getHeaders()
    {
        return
            [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer sfdaa13ffdgt484dfgrdfsewml7idfx9c'
            ];
    }

    public function testIndexDrivingCar()
    {
        $response = $this->get('/api/driving_cars');
        $response->assertStatus(200);
    }

    public function testShowDrivingCar()
    {
        $response = $this->get('/api/driving_cars/1');
        $response->assertStatus(200);
    }

    public function testDestroyDrivingCar()
    {
        $response = $this->withHeaders(self::getHeaders())
            ->delete('/api/driving_cars/6');
        $response->assertStatus(200);
    }

    public function testStoreDrivingCar()
    {
        $data = [
            'client_id' => 1,
            'car_id' => 1,
            'status' => 1,
        ];

        $response = $this->withHeaders(self::getHeaders())
            ->post('/api/driving_cars', []);
        $response->assertStatus(422);

        $response = $this->withHeaders(self::getHeaders())
            ->post('/api/driving_cars', $data);
        $response->assertStatus(201);
    }

    public function testUpdateDrivingCar()
    {
        $data = [
            'client_id' => 9,
            'car_id' => 9,
            'status' => 0,
        ];

        $response = $this->withHeaders(self::getHeaders())
            ->patch('/api/driving_cars/9', []);
        $response->assertStatus(422);

        $response = $this->withHeaders(self::getHeaders())
            ->patch('/api/driving_cars/9', $data);
        $response->assertStatus(200);
    }
}
