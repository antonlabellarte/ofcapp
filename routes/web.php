<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\VisitsController;
use Illuminate\Support\Facades\Route;

// Login
Route::get('/login', function () { return view('login');})->name('loginPage');

// Rotta iniziale
Route::get('/', function () {
    return view('welcome');
});


/* Ordini */
// Filtraggio Ordini
Route::get('/orders/list/filter', OrdersController::class . '@filter')->name('orders.filter');
// Ordini
Route::get('/orders/list', OrdersController::class .'@index')->name('orders.index');
// Nuovo ordine (create form)
Route::get('/orders/create', OrdersController::class . '@create')->name('orders.create');
// Nuovo ordine (insert Order)
Route::post('/orders', OrdersController::class . '@store')->name('orders.store');
// Modifica ordine (edit form)
Route::get('/orders/{id}/edit', OrdersController::class . '@edit')->name('orders.edit');
// Aggiorna ordine (update)
Route::put('/orders/{id}', OrdersController::class . '@update')->name('orders.update');
// Elimina ordine (destroy Order)
Route::delete('/orders/{id}', OrdersController::class . '@destroy')->name('orders.destroy');


/* Clienti */
// Filtraggio Clienti
Route::get('/customers/list/filter', CustomersController::class . '@filter')->name('customers.filter');
// Clienti
Route::get('/customers/list', CustomersController::class . '@index')->name('customers.index');
// Nuovo Cliente (Create Form)
Route::get('/customers/create', CustomersController::class . '@create')->name('customers.create');
// Nuovo Cliente (Insert Cliente)
Route::post('/customers', CustomersController::class . '@store')->name('customers.store');
// Modifica ordine (edit form)
Route::get('/customers/{id}/edit', CustomersController::class . '@edit')->name('customers.edit');
// Aggiorna ordine (update)
Route::put('/customers/{id}', CustomersController::class . '@update')->name('customers.update');
// Elimina ordine (destroy Order)
Route::delete('/customers/{id}', CustomersController::class . '@destroy')->name('customers.destroy');


/* Fornitore */
// Filtraggio Fornitori
Route::get('/suppliers/list/filter', SuppliersController::class . '@filter')->name('suppliers.filter');
// Fornitori
Route::get('/suppliers/list', SuppliersController::class . '@index')->name('suppliers.index');
// Nuovo Fornitore (Create Form)
Route::get('/suppliers/create', SuppliersController::class . '@create')->name('suppliers.create');
// Nuovo Fornitore (Insert Fornitore)
Route::post('/suppliers', SuppliersController::class . '@store')->name('suppliers.store');
// Modifica Fornitore (edit form)
Route::get('/suppliers/{id}/edit', SuppliersController::class . '@edit')->name('suppliers.edit');
// Aggiorna Fornitore (update)
Route::put('/suppliers/{id}', SuppliersController::class . '@update')->name('suppliers.update');
// Elimina Fornitore (destroy Supplier)
Route::delete('/suppliers/{id}', SuppliersController::class . '@destroy')->name('suppliers.destroy');


/* Visite */
// Filtraggio Visite
Route::get('/visits/list/filter', VisitsController::class . '@filter')->name('visits.filter');
// Visite
Route::get('/visits/list', VisitsController::class . '@index')->name('visits.index');
// Nuova Visita (Create Form)
Route::get('/visits/create', VisitsController::class . '@create')->name('visits.create');
// Nuova Visita (Insert Visita)
Route::post('/visits', VisitsController::class . '@store')->name('visits.store');
// Modifica Visita (edit form)
Route::get('/visits/{id}/edit', VisitsController::class . '@edit')->name('visits.edit');
// Aggiorna Visita (update)
Route::put('/visits/{id}', VisitsController::class . '@update')->name('visits.update');
// Elimina Visita (destroy visit)
Route::delete('/visits/{id}', VisitsController::class . '@destroy')->name('visits.destroy');

/*****************************/
/* Altre posizioni fornitori */
/*****************************/

// // // Nuova posizione (Insert)
Route::post('/positions', SuppliersController::class . '@storePosition')->name('positions.store');
// // // Modifica posizione (edit form)
Route::get('/positions/{id}/editPosition', SuppliersController::class . '@editPosition')->name('positions.edit');
// // // // Aggiorna posizione (update)
Route::put('/positions/{id}', SuppliersController::class . '@updatePosition')->name('positions.update');
// // // // Elimina posizione
Route::delete('/positions/{id}/positiondeleted', SuppliersController::class . '@destroyPosition')->name('positions.destroy');

/*****************************/
/* Collaboratori clienti */
/*****************************/

// Nuovo collaboratore (Insert)
Route::post('/collaborators', CustomersController::class . '@storeCollaborator')->name('collaborators.store');
// // // Modifica posizione (edit form)
Route::get('/collaborators/{id}/editCollaborator', CustomersController::class . '@editCollaborator')->name('collaborators.edit');
// // // // Aggiorna posizione (update)
Route::put('/collaborators/{id}', CustomersController::class . '@updateCollaborator')->name('collaborators.update');
// // // // Elimina posizione
Route::delete('/collaborators/{id}/collaboratordeleted', CustomersController::class . '@destroyCollaborator')->name('collaborators.destroy');

/*****************************/
/* Mail clienti */
/*****************************/

// Nuova mail (Insert)
Route::post('/mails', CustomersController::class . '@storeMail')->name('mails.store');
// Modifica posizione (edit form)
Route::get('/mails/{id}/editMail', CustomersController::class . '@editMail')->name('mails.edit');
// Aggiorna posizione (update)
Route::put('/mails/{id}', CustomersController::class . '@updateMail')->name('mails.update');
// Elimina posizione
Route::delete('/mails/{id}/maildeleted', CustomersController::class . '@destroyMail')->name('mails.destroy');

/*****************************/
/* Telefoni clienti */
/*****************************/

// Nuova mail (Insert)
Route::post('/numbers', CustomersController::class . '@storeNumber')->name('numbers.store');
// Modifica posizione (edit form)
Route::get('/numbers/{id}/editNumber', CustomersController::class . '@editNumber')->name('numbers.edit');
// Aggiorna posizione (update)
Route::put('/numbers/{id}', CustomersController::class . '@updateNumber')->name('numbers.update');
// Elimina posizione
Route::delete('/numbers/{id}/numberdeleted', CustomersController::class . '@destroyNumber')->name('numbers.destroy');