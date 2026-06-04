<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');
Route::get('/produk-layanan', function () {
    return view('pages.products-services');
})->name('products-services');
Route::get('/kemitraan', function () {
    return view('pages.partnership');
})->name('partnership');
Route::get('/kontak', function () {
    return view('pages.contact');
})->name('contact');