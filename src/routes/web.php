<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\MainController@mypage')->name('mypage.index');
Route::put('/{done}', 'App\Http\Controllers\ConsumeController@done')->name('mypage.done');
Route::get('/shop', 'App\Http\Controllers\MainController@shop')->name('shop.index');
Route::put('/shop/{buy}', 'App\Http\Controllers\ConsumeController@buy')->name('shop.buy');