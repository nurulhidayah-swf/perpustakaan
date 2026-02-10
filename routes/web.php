<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/list', [BookController::class, 'index']);
 
