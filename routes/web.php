<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

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


/* =========================
   Admin Routes
========================= */
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('admin.auth');