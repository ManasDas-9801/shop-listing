<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CateogriesController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\RatingController;

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

Route::get('/',[CateogriesController::class,"index"])->name('home');
Route::get('/shops',[ShopController::class,"index"])->name('shops');
Route::post('/shops',[ShopController::class,"index"])->name("search.rating");


Route::post('/save/cat',[CateogriesController::class,"store"])->name("Save.Cat");
Route::post('/save/shop',[ShopController::class,"store"])->name("Save.Shop");
Route::post('/save/rating',[RatingController::class,"store"])->name("Save.rating");
// Route::get('/search/{serach}',[ShopController::class,"indesx"])->name("search.rating");
