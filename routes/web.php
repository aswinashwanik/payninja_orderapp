<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;

Route::get('/order-form', function () {
    return view('order-form');
});

Route::post('/web-orders', [OrderController::class, 'webStore']);
