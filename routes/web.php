<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserSpaceController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\NotificationPreferenceController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/seconnecter', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/sinscrire', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/sinscrire', [RegisterController::class, 'register'])->name('register.submit');

Route::get('/auth/confirmation', [RegisterController::class, 'confirmation'])->name('auth.confirmation')->middleware('auth');
Route::post('/auth/resend', [RegisterController::class, 'resendConfirmation'])->name('auth.resend')->middleware('auth');

// Profil
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create')->middleware('auth');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

// Offres
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index')->middleware('auth');
Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create')->middleware('auth');
Route::post('/offers', [OfferController::class, 'store'])->name('offers.store')->middleware('auth');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');
Route::get('/offers/{id}/edit', [OfferController::class, 'edit'])->name('offers.edit')->middleware('auth');
Route::put('/offers/{id}', [OfferController::class, 'update'])->name('offers.update')->middleware('auth');
Route::delete('/offers/{id}', [OfferController::class, 'destroy'])->name('offers.destroy')->middleware('auth');
Route::get('/offers/public', [OfferController::class, 'publicIndex'])->name('offers.public');

// Demandes
Route::get('/demands', [RequestController::class, 'index'])->name('requests.index')->middleware('auth');
Route::get('/requests/create', [RequestController::class, 'create'])->name('requests.create')->middleware('auth');
Route::post('/requests', [RequestController::class, 'store'])->name('requests.store')->middleware('auth');

// Notifications
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index')->middleware('auth');

// Transactions
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index')->middleware('auth');

// Pages statiques
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/cooperatives', function () { return view('cooperatives'); })->name('cooperatives');
Route::get('/terms', function () { return view('terms'); })->name('terms');
Route::get('/privacy', function () { return view('privacy'); })->name('privacy');

// Admin
Route::get('/admin/users', [UserSpaceController::class, 'adminUsers'])->name('admin.users')->middleware('auth');
Route::get('/admin/contact', function () { return view('admin.contact'); })->name('admin.contact.send');
Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy')->middleware('auth');
Route::get('/admin/users/{id}', [AdminController::class, 'show'])->name('admin.users.show')->middleware('auth');

// Changement de langue
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

Route::get('/preferences-notifications', function () {
    return view('preferences-notifications');
})->name('preferences.notifications');

Route::get('/gestion-publications', function () {
    return view('gestion-publications');
})->name('gestion.publications');

Route::get('/offre-detail', function () {
    return view('offre-detail');
})->name('offre.detail');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/demande-details', function () {
    return view('demande-details');
})->name('demande.details');

Route::get('/confirmation-compte', function () {
    return view('confirmation-compte');
})->name('confirmation.compte');

Route::get('/validation-profil', function () {
    return view('validation-profil');
})->name('validation.profil');

Route::get('/visualisation-interets', function () {
    return view('visualisation-interets');
})->name('visualisation.interets');

Route::get('/mise-en-contact', function () {
    return view('mise-en-contact');
})->name('mise.en.contact');

Route::get('/points', function () {
    return view('points');
})->name('points');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');


