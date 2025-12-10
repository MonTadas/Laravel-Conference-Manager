<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\ConferenceParticipantsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => true, 'login' => true, 'reset' => false, 'verify' => false]);

Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::post('events/store_image', [ConferenceController::class, 'storeImage']);
    Route::resource('events', ConferenceController::class)
        ->except(['index', 'show', 'storeImage'])
        ->parameters(['events' => 'conference']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('events/{conference}/participation', [ConferenceParticipantsController::class, 'store'])
        ->name('events.participation.store');
    Route::delete('events/{conference}/participation', [ConferenceParticipantsController::class, 'destroy'])
        ->name('events.participation.destroy');
});

Route::resource('events', ConferenceController::class)
    ->only(['index', 'show'])
    ->parameters(['events' => 'conference']);    // cost 2 hours due to overshadowing

Route::get('/', [HomeController::class, 'index']);
