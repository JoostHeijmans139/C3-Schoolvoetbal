<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TournamentController::class, 'home'])->name('home');

Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('createTournament');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/create', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/team/edit/{id}', [TeamController::class, 'update'])->name('team.update');

    Route::get('/dashboard/teams', [DashboardController::class, 'teams'])->name('dashboard.teams')->middleware("admin");
});

require __DIR__ . '/auth.php';
