<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/home', [HomeController::class, 'index'])->name('home');
