<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);





