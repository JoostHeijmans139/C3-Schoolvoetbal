<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use App\Models\Tournament;
use Auth;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Auth::user()->team;
        $players = $team->players;
        $tournaments = $team->tournaments;

        return view('teams.index', compact('team', 'players', 'tournaments'));
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
        $team->user_id = Auth::id();

        $team->save();

        $players = $request->players;

        foreach ($players as &$player) {
            $player['team_id'] = $team->id;
        }

        Player::insert($players);

        return redirect()->route("games");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::findOrFail($id);
        $players = $team->players()->get();

        return view('teams.index', compact('team', 'players'));
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

        foreach ($playersToDelete as $deletedPlayer) {
            $deletedPlayer->delete();
        }

        foreach ($request->players as $player) {
            if (isset($player['id'])) {
                $playerOld = Player::findOrFail($player['id']);
                $playerOld->name = $player['name'];
                $playerOld->shirt_number = $player['shirt_number'];
                $playerOld->save();
            }
            else {
                $player['team_id'] = $team->id;
                Player::insert($player);
            }
        }

        if (Auth::user()->role == "user") {
            return redirect()->route("team.index");
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

    public function showTournamentList(Team $team)
    {
        $available = Tournament::whereDoesntHave('teams', function ($query) use ($team) {
            $query->where('teams.id', $team->id);
        })
        ->where(function ($query) {
            $query->whereRaw('capacity > (SELECT COUNT(*) FROM tournamentteams WHERE tournamentteams.tournament_id = tournaments.id)');
        })->get();

        return view('teams.tournamentList', compact('available', 'team'));
    }

    public function signUpTournament(Team $team, Tournament $tournament)
    {
        $team->tournaments()->attach($tournament->id);

        return redirect()->route('team.index');
    }
}
