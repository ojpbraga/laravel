<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return 'About page';
});

// Podemos retornar outros tipo de dados, como um array
Route::get('/data', function () {
    return ['data' => '25/09/2000', 'isSet' => true];
});
Route::get('/test', function () {
    return view('test');
});