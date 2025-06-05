<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\API\AuthController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// users routes
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

// destinations routes
Route::get('/destinations', [DestinationController::class, 'index']);
Route::post('/destinations', [DestinationController::class, 'store']);
Route::delete('/destinations/{id}', [DestinationController::class, 'destroy']);

// hotels routes
Route::get('/hotels', [HotelController::class, 'index']);
Route::post('/hotels', [HotelController::class, 'store']);
Route::put('/hotels/{id}', [HotelController::class, 'update']);

// auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/me', [AuthController::class, 'me']);

