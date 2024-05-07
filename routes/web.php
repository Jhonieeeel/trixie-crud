<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::patch('/dashboard', [DashboardController::class, 'update'])->middleware(['auth', 'verified'])->name('dashboard.update');


// wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->middleware(['auth', 'verified'])->name('wishlist');
Route::post('/dashboard', [WishlistController::class, 'store'])->middleware(['auth', 'verified'])->name('wishlist.store');
Route::delete('/wishlist/{wishlist}', [WishlistController::class, 'destroy'])->middleware(['auth', 'verified'])->name('wishlist.destroy');

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
