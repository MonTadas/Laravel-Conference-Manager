<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::post('events/store_image', [ConferenceController::class, 'storeImage']);
    Route::resource('events', ConferenceController::class)
        ->except(['index', 'show', 'storeImage'])
        ->parameters(['events' => 'conference']);
});

Route::resource('events', ConferenceController::class)
    ->only(['index', 'show'])
    ->parameters(['events' => 'conference']);    // cost 2 hours due to overshadowing

Route::resource('/', HomeController::class);

Auth::routes(['register' => true, 'login' => true, 'reset' => false, 'verify' => false]);
