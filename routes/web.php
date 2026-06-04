<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');