<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'cars'], function () {
    Route::get('/', [\App\Http\Controllers\API\CarController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\API\CarController::class, 'store']);
    Route::delete('/{car}', [\App\Http\Controllers\API\CarController::class, 'destroy']);
    Route::get('/{car}', [\App\Http\Controllers\API\CarController::class, 'show']);
    Route::patch('/{car}', [\App\Http\Controllers\API\CarController::class, 'update']);


});

Route::group(['prefix' => 'clients'], function () {
    Route::get('/', [\App\Http\Controllers\API\ClientController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\API\ClientController::class, 'store']);
    Route::delete('/{client}', [\App\Http\Controllers\API\ClientController::class, 'destroy']);
    Route::get('/{client}', [\App\Http\Controllers\API\ClientController::class, 'show']);
    Route::patch('/{client}', [\App\Http\Controllers\API\ClientController::class, 'update']);
});

Route::group(['prefix' => 'driving_cars'], function () {
    Route::get('/', [\App\Http\Controllers\API\DrivingCarController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\API\DrivingCarController::class, 'store']);
    Route::delete('/{drivingCar}', [\App\Http\Controllers\API\DrivingCarController::class, 'destroy']);
    Route::get('/{drivingCar}', [\App\Http\Controllers\API\DrivingCarController::class, 'show']);
    Route::patch('/{drivingCar}', [\App\Http\Controllers\API\DrivingCarController::class, 'update']);
});
