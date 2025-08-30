<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.layouts.website');
})->name('website');
route::get('/contact', function () {
    return view('frontend.contact.contact_us');
})->name('contact');
