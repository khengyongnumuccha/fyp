<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

// Handle contact form submission
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

//pages
Route::get('/aboutus', [UserController::class, 'aboutus'])->name('aboutus');
Route::get('/adoptform', [UserController::class, 'adoptform'])->name('adoptform');
Route::get('/adopt', [UserController::class, 'adopt'])->name('adopt');
// Show the contact form
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/donate', [UserController::class, 'donate'])->name('donate');
Route::get('/profileinfo', [UserController::class, 'profileinfo'])->name('profileinfo');
Route::get('/donateform', [UserController::class, 'donateform'])->name('donateform');



//normal user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','user'])->name('dashboard');

//admin user
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified','admin'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
