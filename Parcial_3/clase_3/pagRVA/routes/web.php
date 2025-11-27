<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
 return view('roja'); // página por defecto
});
Route::view('/roja', 'roja');
Route::view('/verde', 'verde');
Route::view('/azul', 'azul');
