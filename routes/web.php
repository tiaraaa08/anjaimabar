<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/devina', function () {
    return view('devina');
});

Route::get('/content', function () {
    return view('content');
});
