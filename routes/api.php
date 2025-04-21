<?php

use App\Http\Controllers\API\GeneralController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/getNewDeviceId', [GeneralController::class, "getNewDeviceId"])->name('get-new-device-id');
Route::post('/addFavorite', [GeneralController::class, "addFavorite"])->name('add-favorite');
Route::post('/getFavorite', [GeneralController::class, "getFavorite"])->name('get-favorite');
Route::post('/scan', [GeneralController::class, "scan"])->name('scan');