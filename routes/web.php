<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeContentController;
use App\Http\Controllers\Admin\AboutContentController;
use App\Http\Controllers\Admin\ProductsServicesContentController;
use App\Http\Controllers\Admin\PartnershipContentController;
use App\Http\Controllers\Admin\ContactContentController;
use App\Http\Controllers\Admin\ConsultationPromoController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductUnitController;
use App\Http\Controllers\Admin\ProductUnitImageController;
use App\Http\Controllers\ProductDetailController;
use App\Models\ProductCategory;

Route::get('/', function () {
    $productCategories = ProductCategory::active()->orderBy('sort_order')->get();
    return view('pages.home', compact('productCategories'));
})->name('home');
Route::get('/tentang-kami', function () {
    $productCategories = ProductCategory::active()->orderBy('sort_order')->get();
    return view('pages.about', compact('productCategories'));
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

Route::get('/produk-layanan/{slug}', [ProductDetailController::class, 'show'])->name('product-details.show');


Route::redirect('/login', '/admin/login');

/* =========================
   Admin Routes
========================= */
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    Route::get('/dashboard',                    fn () => view('admin.dashboard'))->name('dashboard');
    Route::get('/contents/home',  [HomeContentController::class, 'index'])->name('contents.home');
    Route::post('/contents/home', [HomeContentController::class, 'update'])->name('contents.home.update');
    Route::get('/contents/about',  [AboutContentController::class, 'index'])->name('contents.about');
    Route::post('/contents/about', [AboutContentController::class, 'update'])->name('contents.about.update');
    Route::get('/contents/products-services',  [ProductsServicesContentController::class, 'index'])->name('contents.products-services');
    Route::post('/contents/products-services', [ProductsServicesContentController::class, 'update'])->name('contents.products-services.update');
    Route::get('/contents/partnership',  [PartnershipContentController::class, 'index'])->name('contents.partnership');
    Route::post('/contents/partnership', [PartnershipContentController::class, 'update'])->name('contents.partnership.update');
    Route::get('/contents/contact',  [ContactContentController::class, 'index'])->name('contents.contact');
    Route::post('/contents/contact', [ContactContentController::class, 'update'])->name('contents.contact.update');

    Route::post('/consultation-promos',                         [ConsultationPromoController::class, 'store'])->name('consultation-promos.store');
    Route::post('/consultation-promos/set-active',              [ConsultationPromoController::class, 'setActive'])->name('consultation-promos.set-active');
    Route::post('/consultation-promos/{promo}/activate',        [ConsultationPromoController::class, 'activate'])->name('consultation-promos.activate');
    Route::post('/consultation-promos/{promo}/deactivate',      [ConsultationPromoController::class, 'deactivate'])->name('consultation-promos.deactivate');
    Route::post('/consultation-promos/{promo}/destroy',         [ConsultationPromoController::class, 'destroy'])->name('consultation-promos.destroy');

    Route::resource('/products/categories', ProductCategoryController::class)
        ->names('products.categories')
        ->parameters(['categories' => 'category']);
    Route::patch('/products/categories/{category}/toggle', [ProductCategoryController::class, 'toggle'])->name('products.categories.toggle');
    Route::resource('/products/units', ProductUnitController::class)
        ->names('products.units')
        ->parameters(['units' => 'unit']);
    Route::patch('/products/units/{unit}/toggle', [ProductUnitController::class, 'toggle'])->name('products.units.toggle');
    Route::post('/products/units/{unit}/images', [ProductUnitImageController::class, 'store'])->name('products.units.images.store');
    Route::patch('/products/images/{image}', [ProductUnitImageController::class, 'update'])->name('products.images.update');
    Route::delete('/products/images/{image}', [ProductUnitImageController::class, 'destroy'])->name('products.images.destroy');

});