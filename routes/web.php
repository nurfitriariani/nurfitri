<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/keranjang', function () {
    return view('keranjang');
    
});
Route::post('/auth',[UserController::class, 'auth']);
Route::get('/finalcheckout',[UserController::class, 'finalcheckout']);

Route::get('/user',[UserController::class, 'user']);
Route::get('/detailproduk/{id}',[UserController::class, 'detailproduk']);





