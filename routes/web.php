<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\BasketController;

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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/','App\Http\Controllers\MainController@index')->name('index');
Route::get('/{category?}','App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product?}','App\Http\Controllers\MainController@product')->name('product');

Route::get('/basket','App\Http\Controllers\BasketController@basket')->name('basket') ;
Route::post('/basket/add/{id}', 'BasketController@basketAdd')->name('basket-add');


//Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'basket']);
//Route::get('/basket/add/{id}', [\App\Http\Controllers\BasketController::class, 'basketAdd']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
