<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::post('/orders', [OrderController::class, 'store']);
// Route::get('/orders', [OrderController::class, 'index']);
// Route::get('/orders/{id}', [OrderController::class, 'show']);
// Route::put('/orders/{id}', [OrderController::class, 'update']);
// Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
// Route::get('/orders/{id}/status', [OrderController::class, 'getStatus']);