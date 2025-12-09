<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("teams.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "location" => "required|string",
            "players" => "required|array",
            "players.*" => "required|array",
            "players.*.name" => "required|string",
            "players.*.shirt_number" => "required|integer|min:1|max:99",
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->location = $request->location;
        $team->user_id = 1;

        $team->save();

        $players = $request->players;

        foreach ($players as &$player) {
            $player['team_id'] = $team->id;
        }

        Player::insert($players);

        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
