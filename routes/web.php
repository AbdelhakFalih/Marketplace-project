<?php

use App\Http\Controllers\OfferController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemandController;
use Illuminate\Support\Facades\Route;

// Page d'accueil & Pages relatives
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/produits', [HomeController::class, 'products'])->name('produits');
Route::get('/cooperatives', [HomeController::class, 'cooperative'])->name('cooperatives');

// Connexion & Déconnexion
Route::get('/login', [LoginController::class, 'showloginForm'])->name('login');
Route::post('/seconnecter', [LoginController::class, 'Login'])->name('seconnecter');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Inscription
Route::get('/register', [RegisterController::class, 'ShowRegisterForm'])->name('register');
Route::post('/sinscrire', [RegisterController::class, 'Register'])->name('sinscrire');
Route::get('/validate_email/{user}',[RegisterController::class, 'showValidate'])->name('validate');
Route::post('/validate_email/confirm', [RegisterController::class, 'verifyEmail'])->name('confirmValidate');

// Administration
Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.Dashboard');
Route::get('/admin/users', [AdminController::class, 'UsersList'])->name('admin.User_Management');
Route::get('/admin/users_detail/{id}', [AdminController::class, 'showUser'])->name('admin.users_show');
Route::get('/admin/statistics', [AdminController::class, 'ShowStatistics'])->name('admin.statistics');
Route::get('/admin/users/edit/{id}', [AdminController::class, 'UpdateForm'])->name('admin.formedit');
Route::post('/admin/update-user', [AdminController::class, 'UpdateUser'])->name('admin.updateUser');
Route::get('/admin/DeleteUser', [AdminController::class, 'DeleteUser'])->name('admin.DeleteUser');

// User space
// Offres
Route::get('/user/home', [OfferController::class, 'showOffers'])->name('user.home');
Route::get('/user/create/{id}', [OfferController::class, 'showCreateFormOffers'])->name('user.create-offer');
Route::post('/user/post', [OfferController::class, 'publierOffer'])->name('user.post-offer');
Route::get('/user/Offers/{id}', [OfferController::class, 'showMyOffers'])->name('user.MyOffers');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');
Route::get('/offers/{id}/edit', [OfferController::class, 'edit'])->name('offers.edit');
Route::post('/offers/{id}/interest', [OfferController::class, 'interest'])->name('offers.interest');
// routes/web.php
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');
// Demandes
Route::get('/user/demands/{id}', [DemandController::class, 'showMyDemands'])->name('user.demands');
Route::get('/user/create-demand/{id}', [DemandController::class, 'showCreateFormDemand'])->name('user.create-demand');
Route::post('/user/post-demand', [DemandController::class, 'publierDemand'])->name('user.post-demand');
Route::get('/user/demand_details/{id}', [DemandController::class, 'show_demand_detail'])->name('demands.show');

// Notifications
Route::get('/user/inbox', [ProfileController::class, 'showInbox'])->name('user.inbox');
Route::get('/user/notifications', [ProfileController::class, 'showNotifications'])->name('user.notifications');

//  Profil
Route::get('/user/dashboard/{id}', [ProfileController::class, 'UserDashboard'])->name('user.dashboard');
Route::get('/user/profile/{id}', [ProfileController::class, 'showProfile'])->name('user.profile');
Route::post('/user/profile/update', [ProfileController::class, 'updateProfile'])->name('user.updateProfile');
Route::get('/user/reset/{id}', [ProfileController::class, 'reset_password'])->name('user.reset_password');
Route::post('/user/reset', [ProfileController::class, 'reset'])->name('user-reset');
Route::get('/demands/{id}', [DemandController::class, 'show_demand_detail'])->name('demands.show');
?>
