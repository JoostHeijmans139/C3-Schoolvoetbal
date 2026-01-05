<?php

use App\Http\Resources\Game as ResourcesGame;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return "balls";
});

Route::get('/wedstrijden', function (Request $request) {
    return ResourcesGame::collection(Game::all());
});
