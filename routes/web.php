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

Route::get('/', 'IndexController@index')->name('site.index');
Route::get('/contato', 'IndexController@contato')->name('site.contato');
Route::get('/checkout', 'IndexController@checkout')->name('site.checkout');
Route::get('/store','IndexController@store')->name('site.store');
Route::get('/product','IndexController@product')->name('site.product');
Route::get('/consumir','ConsumirController@consumir')->name('site.consumir');
