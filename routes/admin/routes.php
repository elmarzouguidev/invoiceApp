<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CRM\CustomerController;
use Illuminate\Support\Facades\Route;


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');

    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/create', [CustomerController::class, 'store'])->name('customers.store');

    Route::get('/edit/{customer}', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/edit/{customer}', [CustomerController::class, 'update'])->name('customers.update');
});
