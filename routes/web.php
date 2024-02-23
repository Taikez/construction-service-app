<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tentang-kami', function () {
    return view('about-us');
})->name('aboutUs');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/kontak', function () {
    return view('contact');
})->name('contact');
