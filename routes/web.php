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

Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    Route::get('/dashboard',                    fn () => view('admin.dashboard'))->name('dashboard');
    Route::get('/contents/home',                fn () => view('admin.contents.home'))->name('contents.home');
    Route::get('/contents/about',               fn () => view('admin.contents.about'))->name('contents.about');
    Route::get('/contents/products-services',   fn () => view('admin.contents.products-services'))->name('contents.products-services');
    Route::get('/contents/partnership',         fn () => view('admin.contents.partnership'))->name('contents.partnership');
    Route::get('/contents/contact',             fn () => view('admin.contents.contact'))->name('contents.contact');
    Route::get('/faqs',                         fn () => view('admin.faqs.index'))->name('faqs.index');
    Route::get('/media',                        fn () => view('admin.media.index'))->name('media.index');
    Route::get('/messages',                     fn () => view('admin.messages.index'))->name('messages.index');
});