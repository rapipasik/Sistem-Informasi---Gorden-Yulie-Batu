<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Gorden Yulie Batu (Tahap Slicing)
|--------------------------------------------------------------------------
*/

// 1. Halaman Utama (Home Page)
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Halaman Tentang Kami (About Us)
Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// 3. Halaman List Katalog (Catalog Page)
Route::get('/katalog', function () {
    return view('catalog.index');
})->name('catalog.index');

// 4. Halaman Detail Produk (Single Catalog Page)
Route::get('/katalog/detail', function () {
    return view('catalog.show');
})->name('catalog.show');

// 5. Halaman List Portfolio (Portfolio Page)
Route::get('/portfolio', function () {
    return view('portfolio.index');
})->name('portfolio.index');

// 6. Halaman Detail Project Portfolio (Single Portfolio Page)
Route::get('/portfolio/detail', function () {
    return view('portfolio.show');
})->name('portfolio.show');

// 7. Halaman Testimoni (Testimonial Page)
Route::get('/testimoni', function () {
    return view('testimonial');
})->name('testimoni');

// 8. Halaman Kontak Kami (Contact Us Page)
Route::get('/kontak', function () {
    return view('contact');
})->name('contact');
