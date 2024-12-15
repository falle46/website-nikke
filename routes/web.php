<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Halaman Utama
Route::get('/', function () {
    return view('pages.main');
})->name('home');

// Halaman Produk
Route::get('/product', [ProductController::class, 'index'])->name('product.index'); // Menampilkan semua produk

// Halaman Detail Produk
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');

// Halaman Kontak
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Halaman Keranjang
Route::get('/cart', [ProductController::class, 'showCart'])->name('cart.show');

// Tambah ke Keranjang
Route::post('/add-to-cart', [ProductController::class, 'addToCart'])->name('cart.add');

// Kosongkan Keranjang
Route::post('/clear-cart', function () {
    Session::forget('cart');
    return response()->json(['message' => 'Keranjang berhasil dikosongkan!']);
})->name('cart.clear');

// Halaman Checkout
Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');
