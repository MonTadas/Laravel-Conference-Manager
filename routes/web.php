<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::resource("events", ConferenceController::class)->only('index', 'create', 'store', 'show')->parameters(['events'=> 'conference']);
Route::post('events/store_image', [ConferenceController::class, "storeImage"]);
