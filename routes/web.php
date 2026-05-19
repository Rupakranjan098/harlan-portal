<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/board', [HomeController::class, 'board'])->name('board');
Route::get('/businesses', [HomeController::class, 'businesses'])->name('businesses');
Route::get('/companies', [HomeController::class, 'companies'])->name('companies');
Route::get('/impact', [HomeController::class, 'impact'])->name('impact');
Route::get('/timeline', [HomeController::class, 'timeline'])->name('timeline');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/stats', [AdminController::class, 'stats'])->name('stats');
    Route::get('/directors', [AdminController::class, 'directors'])->name('directors');
    Route::get('/businesses', [AdminController::class, 'businesses'])->name('businesses');
    Route::get('/companies', [AdminController::class, 'companies'])->name('companies');
    Route::get('/impact', [AdminController::class, 'impact'])->name('impact');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::post('/stats/{stat}', [AdminController::class, 'updateStat'])->name('stats.update');
    Route::post('/directors/{director}', [AdminController::class, 'updateDirector'])->name('directors.update');
    Route::post('/businesses/{business}', [AdminController::class, 'updateBusiness'])->name('businesses.update');
    Route::post('/companies/{company}', [AdminController::class, 'updateCompany'])->name('companies.update');
    Route::post('/news/{news}', [AdminController::class, 'updateNews'])->name('news.update');
    Route::post('/settings/logo', [AdminController::class, 'uploadLogo'])->name('settings.logo');
    Route::post('/settings/{setting}', [AdminController::class, 'updateSetting'])->name('settings.update');
    Route::post('/impact/{impactStat}', [AdminController::class, 'updateImpact'])->name('impact.update');

    Route::post('/stats', [AdminController::class, 'storeStat'])->name('stats.store');
    Route::post('/directors', [AdminController::class, 'storeDirector'])->name('directors.store');
    Route::post('/businesses', [AdminController::class, 'storeBusiness'])->name('businesses.store');
    Route::post('/companies', [AdminController::class, 'storeCompany'])->name('companies.store');
    Route::post('/news', [AdminController::class, 'storeNews'])->name('news.store');
    Route::post('/settings', [AdminController::class, 'storeSetting'])->name('settings.store');
    Route::post('/impact', [AdminController::class, 'storeImpact'])->name('impact.store');
});
