<?php

use App\Http\Controllers\OfferController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

// Administration :
// 1 - tableau de bord
Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.Dashboard');
// 2 - liste des utilisateurs
Route::get('/admin/users', [AdminController::class, 'UsersList'])->name('admin.User_Management');
// 3 - Affichage des détails d'un utilisateur
Route::get('/admin/users_detail/{id}', [AdminController::class, 'showUser'])->name('admin.users_show');
// 4 - Statsttique genereaux de l'applie
Route::get('/admin/statistics', [AdminController::class, 'ShowStatistics'])->name('admin.statistics');
// 5 - Modification des données du user
Route::get('/admin/users/edit/{id}', [AdminController::class, 'UpdateForm'])->name('admin.formedit');
Route::post('/admin/update-user', [AdminController::class, 'UpdateUser'])->name('admin.updateUser');
// 6 - Suppression d'un utilisateur
Route::get('/admin/DeleteUser', [AdminController::class, 'DeleteUser']);

// User space
// ----------------- Offres ----------------------------------------------------
// 1 - Liste des offres dans l'applie ( Acceuil )
Route::get('/user/home', [OfferController::class, 'showOffers'])->name('user.home');
// 2 - Ajout des offres
Route::get('/user/create/{id}', [OfferController::class, 'showCreateFormOffers'])->name('user.create-offer');
Route::post('/user/post', [OfferController::class, 'publierOffer'])->name('user.post-offer');
// 3 - Liste des offres de l'utilisateur
Route::get('/user/Offers/{id}', [OfferController::class, 'showMyOffers'])->name('user.MyOffers');
// ----------------- Demandes -------------------------------------------------
// 4 - Listes des demmandes de l'utilisateur
Route::get('/user/demands', [DemandController::class, 'showMyDemands'])->name('user.demands');
// 5 - Ajout offre
Route::get('/user/create-demand', [DemandController::class, 'showCreateFormDemand'])->name('user.create-demand');
Route::post('/user/post-demand', [DemandController::class, 'publierDemand'])->name('user.post-demand');
// ------------------ Notifications & Profils ---------------------------------
// 6 - inbox ( boite de notification)
// 7  - profil ( Dashboard )

