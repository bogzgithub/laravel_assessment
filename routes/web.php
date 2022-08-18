<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('events')->group(function () {
    Route::get('/','App\Http\Controllers\EventController@index');
    Route::get('/create','App\Http\Controllers\EventController@create');
    Route::get('/{id}/edit','App\Http\Controllers\EventController@edit');
    Route::get('/{id}','App\Http\Controllers\EventController@view');
});
Route::get('/homepage', 'App\Http\Controllers\AuthController@index');
Route::get('/register', 'App\Http\Controllers\AuthController@userRegister');
Route::get('/login', 'App\Http\Controllers\AuthController@userLogin');


