<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::controller(ContactController::class)->group(function () {
    Route::get('/contatti', 'form')->name('contact.form');
    //ciao ciao
    Route::post('/invia-messaggio', 'send')->name('contact.send');
});


Route::get('/admin', [PageController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
// Route::resource('/admin/products', ProductController::class);

// Route::get('prodotti')
// Route::get('prodotti/create')
// Route::get('prodotti/edit/{id}')
// Route::post('prodotti/store')
// Route::get('prodotti/show/{id}')
// Route::put('prodotti/update/{id}')
// Route::delete('prodotti/delete/{id}')

Route::resource('products', ProductController::class);



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'homepage')->name('pages.homepage');
    Route::get('/{product}', 'product')->name('pages.product');
});
