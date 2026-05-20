<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\WebSiteController@home');

Route::get('/catalogo', 'App\Http\Controllers\WebSiteController@catalogo');

Route::get('/produto', 'App\Http\Controllers\WebSiteController@produto');

Route::get('/carrinho', 'App\Http\Controllers\WebSiteController@carrinho');

Route::get('/checkout', 'App\Http\Controllers\WebSiteController@checkout');

Route::get('/contato', 'App\Http\Controllers\WebSiteController@contato');

Route::prefix('admin')->group(function () {
    
    Route::get('/login', 'App\Http\Controllers\WebSiteController@login');

    Route::get('/', 'App\Http\Controllers\WebSiteController@index');

    Route::get('/index', 'App\Http\Controllers\WebSiteController@index');

    Route::get('/produtos', 'App\Http\Controllers\WebSiteController@produtos');

    Route::get('/pedidos', 'App\Http\Controllers\WebSiteController@pedidos');

    Route::get('/clientes', 'App\Http\Controllers\WebSiteController@clientes');

    Route::get('/configuracoes', 'App\Http\Controllers\WebSiteController@configuracoes');
});