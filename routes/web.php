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

    Route::get('/', [AdminProdutosController::class, 'index']);
    Route::get('/index', [AdminProdutosController::class, 'index']);
    Route::get('/produtos', [AdminProdutosController::class, 'produtos'])->name('produtos');
    Route::get('/pedidos', [AdminProdutosController::class, 'pedidos']);
    Route::get('/clientes', [AdminProdutosController::class, 'clientes']);
    Route::get('/configuracoes', [AdminProdutosController::class, 'configuracoes']);

    Route::get('/produtos/edit/{id}', [AdminProdutosController::class, 'edit'])->name('produtos.edit');
    Route::post('/produtos/salvar', [AdminProdutosController::class, 'store'])->name('produtos.store');

    Route::delete('/produtos/{id}', [AdminProdutosController::class, 'destroy'])->name('produtos.destroy');
    Route::put('/produtos/{id}', [AdminProdutosController::class, 'update'])->name('produtos.update');

});