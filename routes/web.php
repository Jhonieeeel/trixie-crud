<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivingController;
use App\Http\Controllers\FestivalsController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\MythsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 
Route::middleware('auth')->group( function () {
    // get
    Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard');
    Route::get('/hotels', [HotelController::class, 'index'])->name('hotels-dashboard');
    Route::get('/diving', [DivingController::class, 'index'])->name('diving-dashboard');
    Route::get('/festivals', [FestivalsController::class, 'index'])->name('festivals-dashboard');
    Route::get('/myths', [MythsController::class, 'index'])->name('myths-dashboard');
    Route::get('/business', [BusinessController::class, 'index'])->name('business-dashboard');
    // patch
    Route::patch('/dashboard', [DashboardController::class, 'update'])->name('dashboard.update');
    // store
    Route::post('/dashboard', [WishlistController::class, 'store'])->name('wishlist.store');

});


// wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->middleware(['auth', 'verified'])->name('wishlist');

Route::delete('/wishlist/{wishlist}', [WishlistController::class, 'destroy'])->middleware(['auth', 'verified'])->name('wishlist.destroy');

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
