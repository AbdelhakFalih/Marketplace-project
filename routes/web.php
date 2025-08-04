<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\TransactionController;

// HomeController Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');
Route::get('/offers', [HomeController::class, 'offers'])->name('offers.index');

// ProfileController Routes
Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('user.dashboard');
Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('user.profile.edit');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('user.profile.update');
Route::get('/profile/password', [ProfileController::class, 'editPassword'])->name('user.password.edit');
Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('user.password.update');

// AdminController Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'usersIndex'])->name('admin.users.index');
Route::get('/admin/users/{id}/edit', [AdminController::class, 'usersEdit'])->name('admin.users.edit');
Route::post('/admin/users/{id}', [AdminController::class, 'usersUpdate'])->name('admin.users.update');
Route::get('/admin/stats', [AdminController::class, 'stats'])->name('admin.stats');

// LoginController Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/password/reset', [LoginController::class, 'showResetForm'])->name('password.request');
Route::post('/password/email', [LoginController::class, 'sendResetLink'])->name('password.email');

// RegisterController Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

// OfferController Routes
Route::get('/offers/manage', [OfferController::class, 'index'])->name('offers.manage');
Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');

// DemandController Routes
Route::get('/demands', [DemandController::class, 'index'])->name('demands.index');
Route::get('/demands/create', [DemandController::class, 'create'])->name('demands.create');
Route::post('/demands', [DemandController::class, 'store'])->name('demands.store');

// TransactionController Routes
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/transactions/create/{offerId}', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions/{offerId}', [TransactionController::class, 'store'])->name('transactions.store');
