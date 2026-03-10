<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WatchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// register, login, logout
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// összes karóra lekérése
Route::get('/watches', [WatchController::class, 'index']);
// id. karóra lekérdezése
Route::get('/watches/{id}', [WatchController::class, 'show']);
// rendelés létrehozása
Route::post('/orders', [OrderController::class, 'store']);

