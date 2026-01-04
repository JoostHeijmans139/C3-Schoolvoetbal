<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GameController::class, 'home'])->name('games');

Route::get('/dashboard/tournaments/create', [TournamentController::class, 'create'])->name('dashboard.createTournament');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/games/{game}/score/update', [GameController::class, 'update'])->name('games.update');

    Route::get('/team/index', [TeamController::class, 'index'])->name('team.index');
    Route::get('/teams/{id}', [TeamController::class, 'show'])->name('teams.show');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('/team/create', [TeamController::class, 'store'])->name('team.store');
    Route::get('/teams/{team}/tournaments', [TeamController::class, 'showTournamentList'])->name('team.tournamentList');
    Route::post('/teams/{team}/tournaments/{tournament}/signup', [TeamController::class, 'signUpTournament'])->name('team.signup');
    Route::get('/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('/team/edit/{id}', [TeamController::class, 'update'])->name('team.update');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard/teams', [DashboardController::class, 'teams'])->name('dashboard.teams');
        Route::get('/dashboard/tournaments', [TournamentController::class, 'tournaments'])->name('dashboard.tournaments');
        Route::get('/dashboard/tournamentDetails/{id}', [TournamentController::class, 'show'])->name('dashboard.tournamentDetails');
        Route::delete('/tournaments/{tournament}/teams/{team}', [TournamentController::class, 'removeTeam'])->name('tournament.teams.remove');
    });
});

require __DIR__ . '/auth.php';
