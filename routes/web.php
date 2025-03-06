<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contact_UsController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BuyBussinessController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusinessCategoryController;
use App\Http\Controllers\ContactController;

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
Route::middleware('auth','admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::middleware(['web'])->group(function () {
Route::get('/list-your-business', [BusinessController::class, 'step1'])->name('business.step1');
Route::post('/list-your-business', [BusinessController::class, 'storeStep1']);

Route::get('/business-heighlights', [BusinessController::class, 'step2'])->name('business.step2');
Route::post('/business-heighlights', [BusinessController::class, 'storeStep2']);

Route::get('/financial-information', [BusinessController::class, 'step3'])->name('business.step3');
Route::post('/financial-information', [BusinessController::class, 'storeStep3']);

Route::get('/business-photograph', [BusinessController::class, 'step4'])->name('business.step4');
Route::post('/business-photograph', [BusinessController::class, 'upload'])->name('business.upload');
});
Route::get('/contact_us', [ContactController::class, 'contact']);
Route::post('/contact_us', [ContactController::class, 'storecontact'])->name('contact.store');

// Route::get('/businesses', [BusinessController::class, 'getAllBusinesses']);

//admin
Route::get('/business-data', [BusinessController::class, 'showBusinessData']);
Route::get('/admin/categories', [BusinessCategoryController::class, 'index'])->name('admin.categories.index');
Route::post('/admin/categories/store', [BusinessCategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/home', [BusinessCategoryController::class, 'home']);
Route::get('/profiledetails', [BusinessCategoryController::class, 'showprofile']);
Route::get('/signupdetails', [BusinessCategoryController::class, 'signupdetails']);
Route::get('/contactus', [ContactController::class, 'contactdetails']);
Route::get('/contacts', [ContactController::class, 'showContacts'])->name('contacts.list');
Route::delete('/contactsdelete/{id}', [ContactController::class, 'deleteContacts'])->name('contactsdelete');
Route::get('/contactsedit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
Route::post('/contacts/update/{id}', [ContactController::class, 'update'])->name('contacts.update');




Route::get('/adminuser', function () {
    return view('pages.adminuser');
});


require __DIR__.'/auth.php';