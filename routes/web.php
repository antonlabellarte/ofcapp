<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;

// Autenticazione
use App\Http\Controllers\Auth\RegisterController;

// Rotta Home/Landing page
Route::get('/', function () { return view('welcome');})->name('home');
Route::get('/disclaimer', function () { return view('disclaimer');})->name('disclaimer');



// Route::get('/login', function () { return view('auth.login');})->name('login');
// Route::get('/register', function () { return view('auth.register');})->name('register');

/* Ordini */
Route::get('/orders', function () {return view('orders.index');})->name('orders');
// Nuovo
Route::get('/orders/create', OrderController::class . '@create')->name('orders.create');
// Lista
Route::get('/orders/list', OrderController::class . '@index')->name('orders.list');
// Store cliente
Route::post('/orders/stored', OrderController::class . '@store')->name('orders.store');

/* Clienti */
Route::get('/customers', function () {return view('customers.index');})->name('customers');
// Nuovo
Route::get('/customers/create', CustomerController::class . '@create')->name('customers.create');
// Store cliente
Route::post('/customers/stored', CustomerController::class . '@store')->name('customers.store');
// Lista
Route::get('/customers/list', CustomerController::class . '@index')->name('customers.list');
// Modifica cliente
Route::get('/customers/{customer}/edit', CustomerController::class .'@edit')->name('customers.edit');
// Update cliente
Route::put('/agents/{customer}', CustomerController::class .'@update')->name('customers.update');
// Elimina cliente
Route::delete('/customer/{customer}', CustomerController::class .'@destroy')->name('customers.destroy');

/* Fornitori */
Route::get('/suppliers', function () {return view('suppliers.index');})->name('suppliers');
// Nuovo
Route::get('/suppliers/create', SupplierController::class . '@create')->name('suppliers.create');
// Store fornitore
Route::post('/suppliers/stored', SupplierController::class . '@store')->name('suppliers.store');
// Lista
Route::get('/suppliers/list', SupplierController::class . '@index')->name('suppliers.list');
// Dettaglio fornitore
Route::get('/suppliers/{supplier}/detail', SupplierController::class . '@show')->name('suppliers.show');
// Modifica fornitore
Route::get('/suppliers/{supplier}/edit', SupplierController::class .'@edit')->name('suppliers.edit');
// Update fornitore
Route::put('/suppliers/{supplier}', SupplierController::class .'@update')->name('suppliers.update');
// Elimina fornitore
Route::delete('/supplier/{supplier}', SupplierController::class .'@destroy')->name('suppliers.destroy');

// Auth::routes();
Route::get('/login', function () { return view('auth.login');})->name('login');
Route::get('/register', RegisterController::class . '@create')->name('register');
Route::post('/register/ok', RegisterController::class . '@store')->name('register.store');
// Route::get('/register', function () { return view('auth.register');})->name('register');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Documentazione */
Route::get('/doc', function () {return view('doc.index');})->name('doc');
Route::get('/doc/disclaimer', function () { return view('doc.disclaimer.index');})->name('docdisclaimer');
