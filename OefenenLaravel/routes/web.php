<?php
namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfenenController;
use App\Http\controllers\PeriodController;
use App\Http\controllers\CharityController;
use App\Http\controllers\PeriodItemsController;

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
    return view('welcome');
});

Route::resource('oefenen',OfenenController::class);
Route::resource('Charities',CharityController::class);
Route::resource('periods',PeriodController::class);
Route::resource('periods.perioditems',PeriodItemsController::class);

//

//Route::resource('periods.period-items',PeriodController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
