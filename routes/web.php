<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::controller(ContactController::class)->group(function () {
    Route::get('/contatti', 'form')->name('contact.form');
    //ciao ciao
    Route::post('/invia-messaggio', 'send')->name('contact.send');
});



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'homepage')->name('pages.homepage');
    Route::get('/{product}', 'product')->name('pages.product');
});
