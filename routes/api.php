<?php

use App\Http\Controllers\API\authController;
use App\Http\Controllers\API\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('signup',[authController::class,'signup']);
Route::post('login',[authController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout', [authController::class, 'logout']);
    Route::apiResource('posts', PostController::class);
});
