<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    //    public function setUp(): void
//    {
//        parent::setUp();
//        $this->refreshApplication();
//    }

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
        $response = $this->delete('/api/clients/4');
        $response->assertStatus(200);
    }

    public function testStoreClient()
    {
        $data = [];
        $response = $this->post('/api/clients', $data);
        $response->assertStatus(302);
        $data = [
            'full_name' => 'Test Test'
        ];
        $response = $this->post('/api/clients', $data);
        $response->assertStatus(201);
    }

    public function testUpdateClient()
    {
        $data = [];
        $response = $this->patch('/api/clients/7', $data);
        $response->assertStatus(302);
        $data = [
            'full_name' => 'Test Test2 edit'
        ];
        $response = $this->patch('/api/clients/7', $data);
        $response->assertStatus(200);
    }
}
