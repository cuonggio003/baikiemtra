<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

Route::prefix('hotels')->group( function(){
    Route::get('/', [HotelController::class, 'showHotel'])->name('show.hotel');
    Route::get('/create', [HotelController::class, 'createHotel'])->name('create.hotel');
    Route::post('/create', [HotelController::class, 'store'])->name('store.hotel');
    Route::get('/{id}update', [HotelController::class, 'updateHotel'])->name('update.hotel');
    Route::post('/{id}update', [HotelController::class, 'editHotel'])->name('edit.hotel');
    Route::get('/{id}/delete', [HotelController::class, 'deleteHotel'])->name('delete.hotel');
    Route::get('/search', [HotelController::class, 'search'])->name('search.hotel');
});
