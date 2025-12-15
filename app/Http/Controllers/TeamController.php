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
            "teamname" => "required|string",
            "location" => "required|string",
            "players" => "required|array",
            "players.*" => "required|array",
            "players.*.name" => "required|string",
            "players.*.shirt_number" => "required|integer|min:1|max:99",
        ]);

        $team = new Team();
        $team->name = $request->teamname;
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
        $team = Team::findOrFail($id);
        $players = $team->players()->get();
        return view('teams.edit')->with("team", $team)->with("players", $players);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            "teamname" => "required|string",
            "location" => "required|string",
            "players" => "required|array",
            "players.*" => "required|array",
            "players.*.id" => "integer",
            "players.*.name" => "required|string",
            "players.*.shirt_number" => "required|integer|min:1|max:99",
        ]);

        $team = Team::findOrFail($id);

        $team->name = $request->teamname;
        $team->location = $request->location;
        $team->save();

        $players = $team->players;

        $playerIds = collect($request->players)->pluck('id')->filter()->toArray();

        $playersToDelete = $players->whereNotIn('id', $playerIds);

        foreach($playersToDelete as $deletedPlayer){
            $deletedPlayer->delete();
        }

        foreach($request->players as $player){
            if(isset($player['id'])){
                $playerOld = Player::findOrFail($player['id']);
                $playerOld->name = $player['name'];
                $playerOld->shirt_number = $player['shirt_number'];
                $playerOld->save();
            }
            else{
                $player['team_id'] = $team->id;
                Player::insert($player);
            }
        }

        return redirect()->route("dashboard.teams");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
