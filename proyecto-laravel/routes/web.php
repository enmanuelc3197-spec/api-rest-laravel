<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/Pruebas', function () {
    return '<h1>Hola Mundo con Laravel</h1>';
});

Route::get('/animales', 'App\Http\Controllers\PruebasController@index');