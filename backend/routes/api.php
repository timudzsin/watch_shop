<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\WatchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/watches', [WatchController::class, 'index']);
Route::get('/watches/{id}', [WatchController::class, 'show']);
Route::post('/orders', [OrderController::class, 'store']);

