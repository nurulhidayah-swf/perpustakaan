<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengunjungController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/list', [BookController::class, 'index']);

Route::get('/pengunjung', [PengunjungController::class, 'index']);
 
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store']);

