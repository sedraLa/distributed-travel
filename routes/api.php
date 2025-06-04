<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelController;

// مسار لإرجاع بيانات المستخدم المُسجل (مثلاً)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// مسارات المستخدمين
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

// مسارات الوجهات السياحية
Route::get('/destinations', [DestinationController::class, 'index']);
Route::post('/destinations', [DestinationController::class, 'store']);
Route::delete('/destinations/{id}', [DestinationController::class, 'destroy']);

// مسارات الفنادق
Route::get('/hotels', [HotelController::class, 'index']);
Route::post('/hotels', [HotelController::class, 'store']);
Route::put('/hotels/{id}', [HotelController::class, 'update']);
