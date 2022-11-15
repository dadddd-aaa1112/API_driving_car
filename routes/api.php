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
});

Route::group(['prefix' => 'clients'], function () {
    Route::get('/', [\App\Http\Controllers\API\ClientController::class, 'index']);
});

Route::group(['prefix' => 'driving_car'], function () {
    Route::get('/', [\App\Http\Controllers\API\DrivingCarController::class, 'index']);
});
