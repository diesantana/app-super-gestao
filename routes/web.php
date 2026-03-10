<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/about', [AboutController::class, 'about']);
