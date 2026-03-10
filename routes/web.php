<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/login', function() {return 'Tela de login';});
Route::get('/clients', function() {return 'Tela de clientes';});
Route::get('/suppliers', function() {return 'Tela de fornecedores';});
Route::get('/products', function() {return 'Tela de produtos';});
