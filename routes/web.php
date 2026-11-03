<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/our-process', function () {
    return view('our-process');
})->name('our-process');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/clients', function () {
    return view('clients');
})->name('clients');

Route::get('/internship', function () {
    return view('internship');
})->name('internship');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/news-events', function () {
    return view('news-events');
})->name('news-events');

Route::get('/success-stories', function () {
    return view('success-stories');
})->name('success-stories'); 

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/* =====================================================
   SERVICES — Sub pages (services.services.*)
   Path: resources/views/services/services/*.blade.php
   ===================================================== */

Route::get('/services/uiux-design', function () {
    return view('services.uiux-design');
})->name('services.uiux-design');