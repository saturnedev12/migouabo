<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//pages principales
Route::get('/',[HomeController::class,'index']);
Route::get('shop',[ShopController::class,'index']);
Route::get('blogs',[BlogController::class,'index']);
Route::get('contact',[ContactController::class,'index']);

//sous pages
Route::get('product',[ShopController::class,'product']);
Route::get('blog',[BlogController::class,'blog']);
Route::get('login-register',[HomeController::class,'login']);


