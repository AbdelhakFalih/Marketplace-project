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


Route::get('/', [UtilisationController::class, 'welcome']);
Route::get('/login', [UtilisationController::class, 'Page'])->name('page')->defaults('page', 'login');
Route::post('/se_connecter', [UtilisationController::class, 'login']);
Route::get('/register', [UtilisationController::class, 'Page'])->name('page')->defaults('page', 'register');
Route::post('/sinscrire', [UtilisationController::class, 'Inscrire']);
Route::get('/Detail', [UtilisationController::class, 'afficher_plus']);
Route::get('/Delete', [UtilisationController::class, 'supprimerUser']);

