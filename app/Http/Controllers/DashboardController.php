<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function teams(){
        $teams = Team::all();
        return view('dashboard.teams')->with('teams', $teams);
    }
}
