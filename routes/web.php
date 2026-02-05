<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function() {
    return 'Hola';
});

Route::get('/usuario/{nombre}', function($nombre){
    return "Hola $nombre";
});

Route::get('/suma/{a}/{b}', function($a, $b){
    $number = $a + $b;
    return "$number";
});