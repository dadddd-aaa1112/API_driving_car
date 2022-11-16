<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    public static function getHeaders()
    {
        return
            [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer sfdaa13ffdgt484dfgrdfsewml7idfx9c'
            ];
    }

    public function testIndexClient()
    {
        $response = $this->get('/api/clients');
        $response->assertStatus(200);
    }

    public function testShowClient()
    {
        $response = $this->get('/api/clients/1');
        $response->assertStatus(200);
    }

    public function testDestroyClient()
    {
        $response = $this->withHeaders(self::getHeaders())
            ->delete('/api/clients/7');
        $response->assertStatus(200);
    }

    public function testStoreClient()
    {
        $response = $this->withHeaders(self::getHeaders())
            ->post('/api/clients', []);
        $response->assertStatus(422);

        $response = $this->withHeaders(self::getHeaders())
            ->post('/api/clients', ['full_name' => 'Test Test Test2']);
        $response->assertStatus(201);
    }

    public function testUpdateClient()
    {
        $response = $this->withHeaders(self::getHeaders())
            ->patch('/api/clients/10', []);
        $response->assertStatus(422);

        $response = $this->withHeaders(self::getHeaders())
            ->patch('/api/clients/10', ['full_name' => 'Test Test2 edit edit']);
        $response->assertStatus(200);
    }
}
