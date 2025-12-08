<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::resource('register', RegisterController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::post('events/store_image', [ConferenceController::class, 'storeImage']);
    Route::resource('events', ConferenceController::class)->only(['create', 'store']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::resource('events', ConferenceController::class)->only(['index', 'show'])->parameters(['events' => 'conference']);    //cost 2 hours due to overshadowing
Route::resource('/', HomeController::class);
