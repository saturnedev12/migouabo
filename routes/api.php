<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blogs',[ApiController::class,'articles']);
Route::get('/blog/{id}',[ApiController::class,'article']);

Route::get('/products',[ApiController::class,'products']);
Route::get('/product/{id}',[ApiController::class,'product']);
//Route::get('/blogs',[ApiController::class,'articles']);
//Route::get('/blogs/{id}',[ApiController::class,'articles']);
Route::get('/categories',[ApiController::class,'categories']);