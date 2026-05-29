<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\Admin\AdminProdutosController;

Route::get('/', 'App\Http\Controllers\WebSiteController@home');

Route::get('/catalogo', 'App\Http\Controllers\WebSiteController@catalogo');

Route::get('/produto', 'App\Http\Controllers\WebSiteController@produto');

Route::get('/carrinho', 'App\Http\Controllers\WebSiteController@carrinho');

Route::get('/checkout', 'App\Http\Controllers\WebSiteController@checkout');

Route::get('/contato', 'App\Http\Controllers\WebSiteController@contato');

Route::prefix('admin')->group(function () {
    
    Route::get('/login', 'App\Http\Controllers\Admin\AdminProdutosController@login');

    Route::get('/', 'App\Http\Controllers\Admin\AdminProdutosController@index');

    Route::get('/index', 'App\Http\Controllers\Admin\AdminProdutosController@index');

    Route::get('/produtos', 'App\Http\Controllers\Admin\AdminProdutosController@produtos');

    Route::post('/produtos/salvar', ['App\Http\Controllers\Admin\AdminProdutosController', 'store'])->name('produtos.store');

    Route::get('/pedidos', 'App\Http\Controllers\Admin\AdminProdutosController@pedidos');

    Route::get('/clientes', 'App\Http\Controllers\Admin\AdminProdutosController@clientes');

    Route::get('/configuracoes', 'App\Http\Controllers\Admin\AdminProdutosController@configuracoes');
});