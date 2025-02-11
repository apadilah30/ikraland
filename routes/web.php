<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', fn() => view('test'));


Route::get('/', function () {
    return view('index');
});

Route::get('/flower', function () {
    return view('flower');
});

Route::get('/history', function () {
    return view('history');
});