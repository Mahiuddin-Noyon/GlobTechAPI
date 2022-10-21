<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/users', UserController::class);
Route::apiResource('/products', ProductController::class);

// Route::group(['prefix'=> 'products'], function(){
//     Route::apiResource('/{product}/reviews', ReviewController::class);
// });