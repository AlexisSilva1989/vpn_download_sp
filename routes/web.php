<?php


Route::get('/equipos', 'GetDataController@getRvKpiEquipos');
Route::get('/revestimiento', 'GetDataController@getRvCambioRevestimiento');
Route::get('/tonelaje', 'GetDataController@getRvTonelajePorRevestimiento');