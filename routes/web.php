<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::view('/register', 'register'); 

Route::get('/echo:{param}', function (string $param) {
    echo $param; 
    exit(); 
});