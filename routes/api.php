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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personal', 'App\Http\Controllers\PersonalController@index');
Route::get('/personal/{id}', 'App\Http\Controllers\PersonalController@show');
Route::post('/personal', 'App\Http\Controllers\PersonalController@store');
Route::put('/personal/{id}', 'App\Http\Controllers\PersonalController@update');
Route::delete('/personal/{id}', 'App\Http\Controllers\PersonalController@destroy');



