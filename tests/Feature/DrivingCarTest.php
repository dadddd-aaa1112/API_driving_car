<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DrivingCarTest extends TestCase
{
    //    public function setUp(): void
//    {
//        parent::setUp();
//        $this->refreshApplication();
//    }

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
        $response = $this->delete('/api/driving_cars/8');
        $response->assertStatus(200);
    }

    public function testStoreDrivingCar()
    {
        $data = [];
        $response = $this->post('/api/driving_cars', $data);
        $response->assertStatus(302);
        $data = [
            'client_id' => 1,
            'car_id' => 1,
            'status' => 1,
        ];
        $response = $this->post('/api/driving_cars', $data);
        $response->assertStatus(201);
    }

    public function testUpdateDrivingCar()
    {
        $data = [];
        $response = $this->patch('/api/driving_cars/1', $data);
        $response->assertStatus(302);
        $data = [
            'client_id' => 9,
            'car_id' => 9,
            'status' => 0,
        ];
        $response = $this->patch('/api/driving_cars/6', $data);
        $response->assertStatus(200);
    }
}
