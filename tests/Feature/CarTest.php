<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class CarTest extends TestCase
{
    public static function getHeaders()
    {
        return
            [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer sfdaa13ffdgt484dfgrdfsewml7idfx9c'
            ];
    }


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
        $response = $this->withHeaders(self::getHeaders())
            ->delete('/api/cars/26');
        $response->assertStatus(200);
    }

    public function testStoreCar()
    {

        $response = $this->withHeaders(self::getHeaders())
            ->post('/api/cars', []);
        $response->assertStatus(422);

        $response = $this->withHeaders(self::getHeaders())
            ->post('/api/cars', ['reg_number' => 'tesdfst424sfsfesddrdssdse']);
        $response->assertStatus(201);
    }

    public function testUpdateCar()
    {
        $response = $this->withHeaders(self::getHeaders())
            ->patch('/api/cars/25', []);
        $response->assertStatus(422);

        $response = $this->withHeaders(self::getHeaders())
            ->patch('/api/cars/25', ['reg_number' => 'test424sfsfesddrdddssdse edit']);
        $response->assertStatus(200);

    }
}
