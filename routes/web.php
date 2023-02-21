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

Route::get('/dashboard', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('register.login');
});



Route::get('/','App\Http\Controllers\MainController@index')->name('index');

Route::get('/catalog/{category}','App\Http\Controllers\MainController@category')->name('category');
Route::get('/catalog','App\Http\Controllers\MainController@catalog')->name('category');

Route::get('/basket','App\Http\Controllers\BasketController@basket')->name('basket');
Route::get('/basket/place','App\Http\Controllers\BasketController@basketPlace')->name('basket-place');
Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket-add');
Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket-remove');

Route::post('/basket/place','App\Http\Controllers\BasketController@basketConfirm')->name('basket-confirm');

Route::get('/{category}/{product?}','App\Http\Controllers\MainController@product')->name('product');

//Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'basket']);
//Route::get('/basket/add/{id}', [\App\Http\Controllers\BasketController::class, 'basketAdd']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
