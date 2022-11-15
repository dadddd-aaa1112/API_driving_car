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
        Car::factory(15)->create();
        Client::factory(15)->create();

        \App\Models\Status::create([
            'title' => 'Авто не занято, клиент свободен',
        ]);

        \App\Models\Status::create([
            'title' => 'Авто занято клиентом'
        ]);

    }
}
