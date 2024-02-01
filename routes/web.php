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


Route::get('restaurants/index',[restaurantcontroller::class,'index'])->name('restaurant.index');

Route::get('commande/index',[commandecontroller::class,'index'])->name('commande.index');

Route::get('commande/{commande}/edit',[commandecontroller::class,'edit'])->name('commande.edit');
Route::put('commande/{commande}/update',[commandecontroller::class,'update'])->name('commande.update');


Route::get('restaurant/{restaurant}/edit',[restaurantcontroller::class,'edit'])->name('restaurant.edit');
Route::put('restaurant/{restaurant}/update',[restaurantcontroller::class,'update'])->name('restaurant.update');


Route::delete('restaurant/{restaurant}/delete',[restaurantcontroller::class,'delete'])->name('restaurant.delete');


Route::delete('commande/{commande}/delete',[commandecontroller::class,'delete'])->name('commande.delete');


