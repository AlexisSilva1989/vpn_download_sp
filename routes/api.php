<?php

use Illuminate\Http\Request;

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

Route::get('/equipos', 'GetDataController@getRvKpiEquipos');
Route::get('/revestimiento', 'GetDataController@getRvCambioRevestimiento');
Route::get('/tonelaje', 'GetDataController@getRvTonelajePorRevestimiento');