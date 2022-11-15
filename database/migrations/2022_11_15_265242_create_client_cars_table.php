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
        Schema::create('driving_car', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->index()->nullable()->constrained('clients')->nullOnDelete();
            $table->foreignId('car_id')->index()->nullable()->constrained('cars')->nullOnDelete();
            $table->foreignId('status')->index()->nullable()->constrained('statuses')->nullOnDelete();
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
        Schema::dropIfExists('driving_car');
    }
};
