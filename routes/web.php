<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contact_UsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BuyBussinessController;

// Contact Us Routes
Route::get('/contact', [Contact_UsController::class, 'create']); // Show form
Route::post('/contact', [Contact_UsController::class, 'store']); // Handle form submission
Route::get('/contact-dtl', [Contact_UsController::class,'index']);

Route::get('/contact_us', function () {
    return view('pages.contact-us');
});


//About US
Route::get('/about-us', [AboutUsController::class, 'about'])->name('about.us');

//Buy Bussiness route
Route::get('/buy-business', [BuyBussinessController::class, 'bussiness']);



Route::get('/', [HomeController::class, 'index']);

// Dashboard Route with Auth Middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes (Only accessible when authenticated)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';