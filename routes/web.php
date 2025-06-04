<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HotelController;

Route::get('/', function () {
    return view('welcome');
});
//user routes
/*Route::get('/users',[UserController::class,'index']);
Route::post('/users', [UserController::class, 'store']);

//destination routes
Route::get('/destinations',[DestinationController::class,'index']);
Route::post('/destinations', [DestinationController::class, 'store']);
Route::delete('/destinations/{id}',[DestinationController::class,'destroy']);

//hotel routes
Route::get('/hotels',[HotelController::class,'index']);
Route::post('/hotels', [HotelController::class, 'store']);
Route::put('/hotels/{id}',[HotelController::class,'update']);
*/

