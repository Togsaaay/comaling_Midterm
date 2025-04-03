<?php

use App\Http\Controllers\ProductControllers;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductControllers::class);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
