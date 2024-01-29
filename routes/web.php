<?php

use App\Http\Controllers\restaurantcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\commandecontroller;

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


Route::get('/restaurants/create', [RestaurantController::class, 'create'])->name('restaurants.create');
Route::post('/restaurants/store', [RestaurantController::class, 'store'])->name('restaurants.store');



Route::get('/commande/create',[commandecontroller::class,'create'])->name('commande.create');
Route::post('/commande/store',[commandecontroller::class,'store'])->name('commande.store');


