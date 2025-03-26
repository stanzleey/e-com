<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->prefix('admin/produk')->group(function () {
    Route::get('/index', [ProductController::class, 'index'])->name('home.produk.index');
    Route::get('/{product}', [ProductController::class, 'show'])->name('home.produk.show');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/', [ProductController::class, 'create'])->name('home.produk.create');
    Route::post('/', [ProductController::class, 'store'])->name('product.store');
    // Route::resource('products', ProductController::class);
});
Route::resource('products', ProductController::class);
// Routes untuk pengguna umum
Route::prefix('hubungi-kami')->group(function () {
    Route::get('/', [ContactController::class, 'create'])->name('home.contact.create');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});

// Routes untuk admin (protected)
Route::middleware(['auth'])->prefix('admin/contacts')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('home.contact.index');
    Route::get('/{contact}', [ContactController::class, 'show'])->name('home.contact.show');
    Route::delete('/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
