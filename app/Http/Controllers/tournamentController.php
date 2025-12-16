<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\Team;

class TournamentController extends Controller
{
    public function tournaments()
    {
        $tournaments = Tournament::all();
        return view ('dashboard.tournaments')->with('tournaments', $tournaments);
    }

    public function create()
    {
        return view('createTournament');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'capacity' => 'required|integer|min:2|max:50',
            'location' => 'required|string',
            'start_date' => 'required|date|after:now'
        ]);

        Tournament::create($request->all());

        return redirect()->route('dashboard.tournament');
    }

    public function show(string $id)
    {
        $tournament = Tournament::findOrFail($id);
        $tournament->load('teams');

        return view('dashboard.tournamentDetails', compact('tournament'));
    }

    public function removeTeam(Tournament $tournament, Team $team)
    {
        $tournament->teams()->detach($team->id);
        return redirect()->back();
    }
}
