<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes untuk pengguna umum
Route::prefix('hubungi-kami')->group(function () {
    Route::get('/', [ContactController::class, 'create'])->name('home.contact.create');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});

// Routes untuk admin (protected)
Route::middleware(['auth'])->prefix('admin/contacts')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('home.contact.index');
    Route::get('/{contact}', [ContactController::class, 'show'])->name('contact.show');
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
