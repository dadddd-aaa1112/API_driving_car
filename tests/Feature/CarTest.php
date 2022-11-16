<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CarTest extends TestCase
{

//    public function setUp(): void
//    {
//        parent::setUp();
//        $this->refreshApplication();
//    }

    public function testIndexCar()
    {
        $response = $this->get('/api/cars');
        $response->assertStatus(200);
    }

    public function testShowCar()
    {
        $response = $this->get('/api/cars/1');
        $response->assertStatus(200);
    }

    public function testDestroyCar()
    {
        $response = $this->delete('/api/cars/5');
        $response->assertStatus(200);
    }

    public function testStoreCar()
    {
        $data = [];
        $response = $this->post('/api/cars', $data);
        $response->assertStatus(302);
        $data = [
            'reg_number' => 'test424sfsfsse'
        ];
        $response = $this->post('/api/cars', $data);
        $response->assertStatus(201);
    }

    public function testUpdateCar()
    {
        $data = [];
        $response = $this->patch('/api/cars/6', $data);
        $response->assertStatus(302);
        $data = [
            'reg_number' => 'test424sfsfsds edit'
        ];
        $response = $this->patch('/api/cars/6', $data);
        $response->assertStatus(200);
    }
}
