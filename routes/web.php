<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::name('site.')->group(function() {
    Route::get('/', [MainController::class, 'main'])->name('main');
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/login', function() {return 'Tela de login';})->name('login');
});


Route::prefix('app')->name('app.')->group(function() {
    Route::get('/clients', function() {return 'Tela de clientes';})->name('clients');
    Route::get('/suppliers', function() {return 'Tela de fornecedores';})->name('suppliers');
    Route::get('/products', function() {return 'Tela de produtos';})->name('products');
});


Route::fallback(function() {
    return "Página não encontrada! <a href='" . route('site.main') . "'>Clique aqui</a>
    para ir para a página inicial.";
});
