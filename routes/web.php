<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/ofertas', [HomeController::class, 'ofertas']);
Route::get('/biblia', [HomeController::class, 'biblia']);
Route::get('/biblia/{id}', [HomeController::class, 'bibliaShow'])->name('biblia.show');
