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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

Route::get('/api/v1/catalog', 'controllerAPI@index');

Route::get('/api/v1/catalog/{id}', 'controllerAPI@show');

Route::post('/api/v1/catalog', 'controllerAPI@store')->middleware('auth.basic.once');

Route::put('/api/v1/catalog/{id}', 'controllerAPI@update')->middleware('auth.basic.once');

Route::delete('/api/v1/catalog/{id}', 'controllerAPI@destroy')->middleware('auth.basic.once');

Route::put('/api/v1/catalog/{id}/rent
', 'controllerAPI@putRent')->middleware('auth.basic.once');

Route::put('/api/v1/catalog/{id}/return', 'controllerAPI@putReturn')->middleware('auth.basic.once');


});
