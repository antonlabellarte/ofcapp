<?php

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

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
