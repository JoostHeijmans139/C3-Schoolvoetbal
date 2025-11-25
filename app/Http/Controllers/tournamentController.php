<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class tournamentController extends Controller
{
    public function home()
    {
        $tournaments = tournament::all();
        return view ('home')->with('tournaments', $tournaments);
    }
}
