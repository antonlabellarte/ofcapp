<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login
Route::get('/login', function () { return view('login');})->name('loginPage');

// Rotta iniziale
Route::get('/', function () {
    return view('welcome');
});


// Ordini
Route::get('/orders/list', OrdersController::class .'@index')->name('orders.index');
// Filtraggio Ordini
Route::get('/orders/list/filter', OrdersController::class . '@filter')->name('orders.filter');
// Nuovo ordine (create form)
Route::get('/orders/create', OrdersController::class . '@create')->name('orders.create');
// Nuovo ordine (insert Order)
Route::post('/orders/created', OrdersController::class . '@store')->name('orders.store');
// Modifica ordine (edit form)
Route::get('/orders/{id}/edit', OrdersController::class . '@edit')->name('orders.edit');
// Aggiorna ordine (update)
Route::put('/orders/{id}', OrdersController::class . '@update')->name('orders.update');
// Elimina ordine (destroy Order)
Route::delete('/orders/{id}/deleted', OrdersController::class . '@destroy')->name('orders.destroy');

// Clienti
Route::get('/customers/list', CustomersController::class . '@index')->name('customers.index');
// Nuovo Cliente (Create Form)
Route::get('/customers/create', CustomersController::class . '@create')->name('customers.create');
// Nuovo Cliente (Inser Cliente)
Route::post('/customers/created', CustomersController::class .' @store')->name('customers.store');
// Elimina ordine (destroy Order)
Route::delete('/customers/{id}/deleted', CustomersController::class . '@destroy')->name('customers.destroy');
//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
