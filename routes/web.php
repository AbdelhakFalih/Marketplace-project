<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

// Toutes les routes sont maintenant sous le préfixe {locale} pour la gestion multilingue
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']] , function () {
    // Page d'accueil & Pages relatives
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/produits', [HomeController::class, 'products'])->name('produits');
    Route::get('/cooperatives', [HomeController::class, 'cooperative'])->name('cooperatives');

    // Connexion & Déconnexion
    Route::get('/login', [LoginController::class, 'showloginForm'])->name('login');
    Route::post('/seconnecter', [LoginController::class, 'Login'])->name('seconnecter');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Inscription
    Route::get('/register', [RegisterController::class, 'ShowRegisterForm'])->name('register');
    Route::post('/sinscrire', [RegisterController::class, 'Register'])->name('sinscrire');

    // Administration
    Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.Dashboard');
    Route::get('/admin/users', [AdminController::class, 'UsersList'])->name('admin.User_Management');
    Route::get('/admin/users_detail/{id}', [AdminController::class, 'ShowUser'])->name('admin.users_show');
    Route::get('/admin/statistics', [AdminController::class, 'ShowStatistics'])->name('admin.statistics');
    Route::post('/admin/update-user', [AdminController::class, 'UpdateUser'])->name('admin.updateUser');
    Route::delete('/admin/users/{id}', [AdminController::class, 'DeleteUser'])->name('admin.users.destroy');
});


