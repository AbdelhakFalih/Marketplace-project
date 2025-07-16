<?php

use App\Http\Controllers\UtilisationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');

// Language middleware and prefix for bilingual support
Route::group(['prefix' => '{locale?}', 'middleware' => 'setlocale'], function () {
    // Authentication Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/auth/confirmation', [RegisterController::class, 'confirmation'])->name('auth.confirmation')->middleware('auth');
    Route::post('/auth/resend', [RegisterController::class, 'resendConfirmation'])->name('auth.resend')->middleware('auth');

    // Profile Management Routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create')->middleware('auth');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store')->middleware('auth');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('auth');
    Route::get('/profile/validation', [ProfileController::class, 'validation'])->name('profile.validation')->middleware('auth');

    // Offer Management Routes
    Route::get('/offers', [OfferController::class, 'index'])->name('offers.index')->middleware('auth');
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create')->middleware('auth');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store')->middleware('auth');
    Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');
    Route::get('/offers/{id}/edit', [OfferController::class, 'edit'])->name('offers.edit')->middleware('auth');
    Route::put('/offers/{id}', [OfferController::class, 'update'])->name('offers.update')->middleware('auth');
    Route::delete('/offers/{id}', [OfferController::class, 'destroy'])->name('offers.destroy')->middleware('auth');
    Route::get('/offers/public', [OfferController::class, 'publicIndex'])->name('offers.public');

    // Demand Management Routes
    Route::get('/demands', [RequestController::class, 'index'])->name('requests.index')->middleware('auth');
    Route::get('/demands/create', [RequestController::class, 'create'])->name('requests.create')->middleware('auth');
    Route::post('/demands', [RequestController::class, 'store'])->name('requests.store')->middleware('auth');
    Route::get('/demands/{id}', [RequestController::class, 'show'])->name('requests.show')->middleware('auth');
    Route::get('/demands/{id}/edit', [RequestController::class, 'edit'])->name('requests.edit')->middleware('auth');
    Route::put('/demands/{id}', [RequestController::class, 'update'])->name('requests.update')->middleware('auth');
    Route::delete('/demands/{id}', [RequestController::class, 'destroy'])->name('requests.destroy')->middleware('auth');

    // Transaction Management Routes
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index')->middleware('auth');
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store')->middleware('auth');
    Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show')->middleware('auth');
    Route::put('/transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update')->middleware('auth');

    // Notification Preferences Routes
    Route::get('/notifications/preferences', [NotificationPreferenceController::class, 'index'])->name('notification_preferences.index')->middleware('auth');
    Route::post('/notifications/preferences', [NotificationPreferenceController::class, 'update'])->name('notification_preferences.update')->middleware('auth');

    // Interest Tracking Routes
    Route::get('/interests', [InterestController::class, 'index'])->name('interests.index')->middleware('auth');
    Route::post('/interests', [InterestController::class, 'store'])->name('interests.store')->middleware('auth');

    // Points Management Routes
    Route::get('/points', [PointController::class, 'index'])->name('points.index')->middleware('auth');

    // Notification Routes
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index')->middleware('auth');
    Route::get('/notifications/{id}', [NotificationController::class, 'show'])->name('notifications.show')->middleware('auth');
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy')->middleware('auth');

    // User Space Route
    Route::get('/user-space', [UserSpaceController::class, 'index'])->name('user_space')->middleware('auth');
});

// Custom middleware for language setting
Route::middleware('setlocale')->group(function () {
    Route::get('/{locale}', function ($locale) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    })->where('locale', 'fr|ar');
});
```Ro

