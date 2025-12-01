<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class tournamentController extends Controller
{
    public function home()
    {
        $tournaments = Tournament::all();
        return view ('home')->with('tournaments', $tournaments);
    }

    public function create()
    {
        return view('createTournament');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'capacity' => 'required|integer',
            'location' => 'required|string',
            'start_date' => 'required|date|after:now'
        ]);

        Tournament::create($request->all());

        return redirect()->route('home');
    }
}
