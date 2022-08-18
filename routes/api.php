<?php

use App\Http\Controllers\ApiEventController;
use App\Http\Controllers\AuthController;
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
    Route::get('/','App\Http\Controllers\ApiEventController@index');
    Route::get('/active','App\Http\Controllers\ApiEventController@active');
    // Route::get('/{$id}',[EventController::class, 'show']);
    Route::get('/{id}', 'App\Http\Controllers\ApiEventController@show');
    Route::post('/', 'App\Http\Controllers\ApiEventController@store');
    Route::put('/{id}', 'App\Http\Controllers\ApiEventController@update');
    Route::patch('/{id}', 'App\Http\Controllers\ApiEventController@updateSpecific');
    Route::delete('/{id}', 'App\Http\Controllers\ApiEventController@delete');
});

// Route::apiResource('v1/events', EventController::class);
Route::prefix('v1/user')->group(function () {
    Route::post('/register', 'App\Http\Controllers\AuthController@register');
    Route::post('/login', 'App\Http\Controllers\AuthController@login');
});

