<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\tournamentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [tournamentController::class, 'home'])->name('home');

Route::get('/createTournament', [tournamentController::class, 'create'])->name('createTournament');
Route::post('/tournaments', [tournamentController::class, 'store'])->name('tournaments.store');

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
