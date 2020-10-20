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
 * 
 * Admin 
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'PainelController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/dashboard', 'PainelController@dashboard')->name('admin.dashboard')->middleware('is_admin');
Route::get('admin/adicionarProduto', 'PainelController@adicionarProduto')->name('admin.adcProduto')->middleware('is_admin');
Route::get('admin/alterarProduto', 'PainelController@alterarProduto')->name('admin.altProduto')->middleware('is_admin');
Route::get('admin/adicionarUsuario', 'PainelController@adicionarUsuario')->name('admin.adcUsuario')->middleware('is_admin');
Route::get('admin/listarUsuario', 'PainelController@listarUsuario')->name('admin.listarUsuario')->middleware('is_admin');
Route::get('admin/configuracoes/loja', 'PainelController@configLoja')->name('admin.configLoja')->middleware('is_admin');
Route::get('admin/configuracoes/pagamento', 'PainelController@configPagamento')->name('admin.configPagamento')->middleware('is_admin');






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








