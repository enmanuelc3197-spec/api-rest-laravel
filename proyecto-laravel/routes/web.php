<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Pruebas', function () {
    return '<h1>Hola Mundo con Laravel</h1>';
});

Route::get('/animales', 'App\Http\Controllers\PruebasController@index');



Route::get('/test-db', function () {
    return DB::select('SHOW TABLES');
});