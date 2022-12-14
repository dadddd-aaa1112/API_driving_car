<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driving_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->index()->nullable()->constrained('clients')->cascadeOnDelete();
            $table->foreignId('car_id')->index()->nullable()->constrained('cars')->cascadeOnDelete();
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driving_cars');
    }
};
