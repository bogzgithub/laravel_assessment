<?php

use App\Http\Controllers\EventController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1/events')->group(function () {
    Route::get('/','App\Http\Controllers\EventController@index');
    Route::get('/active','App\Http\Controllers\EventController@active');
    // Route::get('/{$id}',[EventController::class, 'show']);
    Route::get('/{id}', 'App\Http\Controllers\EventController@show');
    Route::post('/', 'App\Http\Controllers\EventController@store');
    Route::put('/{id}', 'App\Http\Controllers\EventController@update');
    Route::patch('/{id}', 'App\Http\Controllers\EventController@updateSpecific');
    Route::delete('/{id}', 'App\Http\Controllers\EventController@delete');
});

// Route::apiResource('v1/events', EventController::class);
