<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SuppliersController;

// Rotta Home/Landing page
Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/disclaimer', function () {
    return view('disclaimer');
})->name('disclaimer');

/* Ordini */
Route::get('/orders', function () {return view('orders.index');})->name('orders');
// Nuovo
Route::get('/orders/create', OrdersController::class . '@create')->name('orders.create');

/* Clienti */
Route::get('/customers', function () {return view('customers.index');})->name('customers');
// Nuovo
Route::get('/customers/create', CustomersController::class . '@create')->name('customers.create');

// Fornitori
Route::get('/suppliers', function () {return view('suppliers.index');})->name('suppliers');
// Nuovo
Route::get('/suppliers/create', SuppliersController::class . '@create')->name('suppliers.create');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
