<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    });

    Route::get('/index', function () {
        return view('admin.home');
    });

    Route::get('/produtos', function () {
        return view('admin.produtos');
    });

    Route::get('/pedidos', function () {
        return view('admin.pedidos');
    });

    Route::get('/clientes', function () {
        return view('admin.clientes');
    });

    Route::get('/configuracoes', function () {
        return view('admin.configuracoes');
    });
});