<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CRM\CustomerController;
use App\Http\Controllers\Finance\EstimateController;
use App\Http\Controllers\Finance\InvoiceController;
use Illuminate\Support\Facades\Route;


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'crm'], function () {
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
        Route::delete('/', [CustomerController::class, 'delete'])->name('customers.delete');

        Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
        Route::post('/create', [CustomerController::class, 'store'])->name('customers.store');

        Route::get('/edit/{customer}', [CustomerController::class, 'edit'])->name('customers.edit');
        Route::put('/edit/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    });
});

Route::group(['prefix' => 'documents'], function () {

    Route::group(['prefix' => 'invoices'], function () {
        Route::get('/', [InvoiceController::class, 'index'])->name('invoices.index');
        Route::delete('/', [InvoiceController::class, 'delete'])->name('invoices.delete');

        Route::get('/create', [InvoiceController::class, 'create'])->name('invoices.create');
        Route::post('/create', [InvoiceController::class, 'store'])->name('invoices.store');

        Route::get('/edit/{invoice}', [InvoiceController::class, 'edit'])->name('invoices.edit');
        Route::put('/edit/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update');
    });


    Route::group(['prefix' => 'estimates'], function () {
        Route::get('/', [EstimateController::class, 'index'])->name('estimates.index');
        Route::delete('/', [EstimateController::class, 'delete'])->name('estimates.delete');

        Route::get('/create', [EstimateController::class, 'create'])->name('estimates.create');
        Route::post('/create', [EstimateController::class, 'store'])->name('estimates.store');

        Route::get('/edit/{estimate}', [EstimateController::class, 'edit'])->name('estimates.edit');
        Route::put('/edit/{estimate}', [EstimateController::class, 'update'])->name('estimates.update');
    });
});
