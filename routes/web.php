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

Route::view('/home', 'home')->name('home');
Route::view('admin/home', 'home')->name('admin.home')->middleware('is_admin');
Route::view('admin/dashboard', 'admin.HomeAdmin')->name('admin.dashboard')->middleware('is_admin');
Route::view('admin/adicionarProduto', 'admin.adicionarProduto')->name('admin.adcProduto')->middleware('is_admin');
Route::view('admin/adicionarUsuario', 'admin.Adicionarusuario')->name('admin.adcUsuario')->middleware('is_admin');
Route::view('admin/listarUsuario', 'admin.listarUsuarios')->name('admin.listarUsuario')->middleware('is_admin');
Route::view('admin/configuracoes/loja', 'admin.configLoja')->name('admin.configLoja')->middleware('is_admin');
Route::view('admin/configuracoes/pagamento', 'admin.configPagamento')->name('admin.configPagamento')->middleware('is_admin');

// Metodos de Product
Route::post('admin/cadastroProduto', 'ProductController@cadastroDeProduto')->name('admin.adicionaProduto')->middleware('is_admin');
Route::get('admin/alterarProduto', 'ProductController@alterarProduto')->name('admin.altProduto')->middleware('is_admin');
Route::delete('admin/deleteProduto/{id}', 'ProductController@deleteProduto')->name('admin.deletarProduto')->middleware('is_admin');
Route::get('admin/editarProduto/{id}', 'ProductController@editarProduto')->name('admin.EditarProduto')->middleware('is_admin');
Route::put('admin/updateProduto/{id}', 'ProductController@updateProduto')->name('admin.updateProduto')->middleware('is_admin');

// Metodos de Usuarios







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








