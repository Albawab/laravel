<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TafelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderLineController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return view('tafels.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tafels',TafelController::class);
Route::resource('reservations',ReservationController::class);
Route::resource('orders',OrderController::class);
Route::resource('orders.Order_lines',OrderLineController::class);
Route::resource('products',ProductController::class);
Route::get('search', [ProductController::class, 'search'])->name('search');
//Route::get('/search',['producs'=>'ProductController@search','as' => 'products.search']);

