<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;

// Landing Page
Route::get('/', function () {
    return view('welcome'); // views/welcome.blade.php
})->name('landing');

// Login Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes 
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // views/admin/dashboard.blade.php
    })->name('dashboard');

    Route::get('/profile', [AdminController::class, 'showProfile'])->name('profile');
    Route::put('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password', [AdminController::class, 'updatePassword'])->name('profile.password');

    Route::get('/manage-books', [BookController::class, 'index'])->name('manage-books');
    Route::post('/books', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

    Route::get('/manage-loans', function () {
        return view('admin.manage-loans'); // views/admin/manage-loans.blade.php
    })->name('manage-loans');

    Route::get('/manage-queues', function () {
        return view('admin.manage-queues'); // views/admin/manage-queues.blade.php
    })->name('manage-queues');
});

// User Routes (Mahasiswa)
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard'); // views/user/dashboard.blade.php
    })->name('dashboard');

    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password', [UserController::class, 'updatePassword'])->name('profile.password');

    Route::get('/books', function () {
        return view('user.books'); // views/user/books.blade.php
    })->name('books');

    Route::get('/book-loans', function () {
        return view('user.book-loans'); // views/user/book-loans.blade.php
    })->name('book-loans');

    Route::get('/queue', function () {
        return view('user.queue'); // views/user/queue.blade.php
    })->name('queue');

    Route::get('/history', function () {
        return view('user.history'); // views/user/history.blade.php
    })->name('history');
});