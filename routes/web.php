<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
    return view('Home');
});
//Route::get('/temp', function () {
//    return view('EscortDetailsTemp');
//});
//Route::get('/temps', function () {
//    return view('postsTemp');
//});
//Route::resource('/rooms', RoomController::class);
//Route::resource('/countries', CountryController::class);
//Route::resource('/cities', CityController::class);
//Route::resource('/hotels', HotelController::class);
//Route::resource('/RoomServices', RoomServicesController::class);
//Route::resource('/reservations', ReservationController::class);


Route::resource('/ethnicity', \App\Http\Controllers\EthnicityController::class);
Route::resource('/BoobaSize', \App\Http\Controllers\BoobaSizeController::class);
Route::resource('/WillingToEscort', \App\Http\Controllers\WillingToEscortController::class);
Route::resource('/EyeColor', \App\Http\Controllers\EyeColorController::class);
Route::resource('/HairColor', \App\Http\Controllers\HairColorController::class);
Route::resource('/Posts', \App\Http\Controllers\PostsController::class);
Route::post('/search', [\App\Http\Controllers\PostsController::class, 'search']) -> name('search');

Route::group(['middleware' => ['auth']], function (){Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');});
Route::group(['middleware' => ['auth', 'role:admin']], function (){Route::get('/dashboard/laraturst', [DashboardController::class, 'AdminPanel'])->
name('dashboard.AdminPanel');});

require __DIR__.'/auth.php';
