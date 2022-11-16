<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use App\Models\Client;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Car::factory(30)->create();
        Client::factory(30)->create();

        \App\Models\Status::create([
            'code' => 0,
            'title' => 'Авто не занято, клиент свободен',
        ]);

        \App\Models\Status::create([
            'code' => 1,
            'title' => 'Авто занято клиентом'
        ]);

    }
}
