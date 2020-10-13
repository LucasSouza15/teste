<?php

use App\Http\Controllers\Admin\AdminController;
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


/**
 * Usuarios 
 */
Route::get('/', 'IndexController@index')->name('site.index');
Route::get('/contato', 'IndexController@contato')->name('site.contato');
Route::any('/checkout/{id}', 'IndexController@checkout')->name('site.checkout');
Route::get('/store/enxovais','IndexController@StoreEnxovais')->name('site.enxovais');
Route::get('/store/cosmeticos','IndexController@StoreCosmeticos')->name('site.cosmeticos');
Route::get('/store/roupas','IndexController@StoreRoupas')->name('site.roupas');
Route::get('/product/{id}','IndexController@product')->name('site.product');

/**
 * 
 * Admin 
 */

Route::get('/admin/login', 'AdminController@login')->name('admin.login');
Auth::routes();
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');




