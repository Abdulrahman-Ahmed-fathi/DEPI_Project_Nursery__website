<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OurBlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookseatController;






Route::get('/', function () {
    return view('Home');
});
Route::get('/', [HomeController::class, 'Home']);
Route::get('/about', [AboutController::class, 'About']);
Route::get('/classes', [ClassesController::class, 'Classes']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/ourblog', [OurBlogController::class, 'OurBlog']);




// Display the contact form
Route::get('/contact', function() {
    return view('contact');  // Ensure you have a 'contact' view
})->name('contact.form');

// Handle the contact form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



//handel the bookseat form submission
Route::get('/book-seat', [BookseatController::class, 'create'])->name('book-seat.create');
Route::post('/book-seat', [BookseatController::class, 'store'])->name('book-seat.store');




//breeze auth  and dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
