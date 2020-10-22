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
Route::get('/',[HomeController::class,'index'])->name('index');//->middleware('auth');
Route::get('shop',[ShopController::class,'index'])->name('shop');
Route::get('shop_sub',[ShopController::class,'shop_sub'])->name('shop_sub');
Route::get('blogs',[BlogController::class,'index'])->name('blogs');
Route::get('contact',[ContactController::class,'index'])->name('contact');
//sous pages
Route::get('product',[ShopController::class,'product'])->name('product');
Route::get('blog',[BlogController::class,'blog'])->name('blog');
Route::get('login-register',[HomeController::class,'login'])->name('login-register');


//page de redirigé quand connection est établis
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[HomeController::class,'index'])->name('dashboard');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     //return Inertia\Inertia::render('Dashboard');
   Route::get('/',[HomeController::class,'index']);
})->name('dashboard');*