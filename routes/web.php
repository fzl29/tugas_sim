<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserBookLoanController;

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

    Route::get('/manage-queues', [AdminController::class, 'manageQueues'])->name('manage-queues');
    Route::put('/queues/{queue}/approve', [AdminController::class, 'approveQueue'])->name('queue.approve');
    Route::put('/queues/{queue}/reject', [AdminController::class, 'rejectQueue'])->name('queue.reject');

    Route::get('/manage-loans', [LoanController::class, 'manageLoans'])->name('manage-loans');
    Route::post('/confirm-return/{id}', [LoanController::class, 'confirmReturn'])->name('confirm-return');

});

// User Routes (Mahasiswa)
Route::middleware(['auth', 'role:user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', function () {
        return view('user.dashboard'); // views/user/dashboard.blade.php
    })->name('dashboard');

    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/password', [UserController::class, 'updatePassword'])->name('profile.password');

    Route::get('/books', [BookController::class, 'listForUser'])->name('books');
    Route::get('/book-loans', [UserBookLoanController::class, 'form'])->name('book-loans');
    Route::post('/book-loans/submit', [UserBookLoanController::class, 'submit'])->name('book-loans.submit');

    Route::get('/queue', [UserBookLoanController::class, 'userQueue'])->name('queue');
    Route::get('/queue/{queue}/print', [UserBookLoanController::class, 'printQueue'])->name('queue.print');
    Route::delete('/queue/{queue}', [UserBookLoanController::class, 'cancelQueue'])->name('queue.cancel');

    Route::get('/history', [LoanController::class, 'userHistory'])->name('history');
});