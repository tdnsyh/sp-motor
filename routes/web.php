<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Public\DiagnosaController;
use App\Http\Controllers\Public\PublicController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'publicIndex']);

//auth route
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/diagnosa', [DiagnosaController::class, 'form'])->name('diagnosa.form');
Route::post('/diagnosa/hasil', [DiagnosaController::class, 'hasil'])->name('diagnosa.hasil');

// media route
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboardAdmin'])->name('dashboard.index');

    // donasi
    Route::controller(AdminController::class)->prefix('donasi')->name('donasi.')->group(function () {
        Route::get('/', 'campaignIndex')->name('index');
        Route::get('/{campaign}/detail', 'campaignShow')->name('show');
    });

    // gejala
    Route::controller(AdminController::class)->prefix('gejala')->name('gejala.')->group(function () {
        Route::get('/', 'gejalaIndex')->name('index');
        Route::get('/tambah', 'gejalaCreate')->name('create');
        Route::post('/', 'gejalaStore')->name('store');
        Route::get('/{id}/edit', 'gejalaEdit')->name('edit');
        Route::put('/{id}', 'gejalaUpdate')->name('update');
        Route::delete('/{id}', 'gejalaDestroy')->name('destroy');
    });

    // kerusakan
    Route::controller(AdminController::class)->prefix('kerusakan')->name('kerusakan.')->group(function () {
        Route::get('/', 'kerusakanIndex')->name('index');
        Route::get('/tambah', 'kerusakanCreate')->name('create');
        Route::post('/', 'kerusakanStore')->name('store');
        Route::get('/{id}/edit', 'kerusakanEdit')->name('edit');
        Route::put('/{id}', 'kerusakanUpdate')->name('update');
        Route::delete('/{id}', 'kerusakanDestroy')->name('destroy');
    });

    // rule
    Route::prefix('rule')->name('rule.')->controller(AdminController::class)->group(function () {
        Route::get('/', 'ruleIndex')->name('index');
        Route::get('/create', 'ruleCreate')->name('create');
        Route::post('/', 'ruleStore')->name('store');
        Route::get('/{kode_rule}/edit', 'ruleEdit')->name('edit');
        Route::put('/{kode_rule}', 'ruleUpdate')->name('update');
        Route::delete('/{kode_rule}', 'ruleDestroy')->name('destroy');
    });

});
