<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use App\Models\Team;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use DateTime;

class TournamentController extends Controller
{
    public function tournaments()
    {
        $tournaments = Tournament::all();
        return view ('dashboard.tournaments')->with('tournaments', $tournaments);
    }

    public function create()
    {
        return view('dashboard.createTournament');
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

        return redirect()->route('dashboard.tournaments');
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



    public function generate(Tournament $tournament)
    {
        DB::transaction(function () use ($tournament)
        {
            $teams = $tournament->teams->values();
            $teamCount = $teams->count();

            $hasUnevenTeams = false;
            $nonParticipatingTeams = [];
            if ($teamCount % 2 !== 0)
            {
                $teams->push(null);
                $teamCount++;
                $hasUnevenTeams = true;
            }

            $availablePairs = [];

            for ($i = 0; $i < $teamCount; $i++)
            {
                for ($j = $i + 1; $j < $teamCount; $j++)
                {
                    if ($teams[$i] == null || $teams[$j] == null) continue;

                    $availablePairs[] = [$teams[$i], $teams[$j]];
                }
            }

            $round1 = $this->assignRound($availablePairs, $nonParticipatingTeams, $teams, $hasUnevenTeams);
            $round2 = $this->assignRound($availablePairs, $nonParticipatingTeams, $teams, $hasUnevenTeams);

            $timeSlots = $this->generateTimeSlots();
            $maxMatchesPerDay = 8;
            $matchDuration = 90;

            $day = -1;
            $matchesToday = 0;
            $fieldCount = 2;

            foreach ([$round1, $round2] as $roundIndex => $round)
            {
                $day++;
                $matchesToday = 0;

                foreach ($round as $match)
                {
                    if ($matchesToday >= $maxMatchesPerDay)
                    {
                        $day++;
                        $matchesToday = 0;
                    }

                    $slotIndex = intdiv($matchesToday, $fieldCount);

                    $start = (new DateTime($tournament->start_date))
                        ->modify("+{$day} days")
                        ->setTime(
                            intval(substr($timeSlots[$slotIndex], 0, 2)),
                            intval(substr($timeSlots[$slotIndex], 3, 2))
                        );

                    Game::create([
                        'start' => $start,
                        'duration_in_minutes' => $matchDuration,
                        'team_1_id' => $match[0]->id,
                        'team_2_id' => $match[1]->id,
                        'tournament_id' => $tournament->id
                    ]);

                    $matchesToday++;
                }
            }

            if (count($nonParticipatingTeams) == 2)
            {
                $lastDay = $day;
                $matchesLastDay = $matchesToday;
                $slotsPerDay = count($timeSlots) * $fieldCount;

                if ($matchesLastDay >= $slotsPerDay)
                {
                    $lastDay++;
                    $matchesLastDay = 0;
                }

                $slotIndex = intdiv($matchesLastDay, $fieldCount);

                $start = (new DateTime($tournament->start_date))
                    ->modify("+{$lastDay} days")
                    ->setTime(
                intval(substr($timeSlots[$slotIndex], 0, 2)),
                intval(substr($timeSlots[$slotIndex], 3, 2))
                    );

                Game::create([
                    'start' => $start,
                    'duration_in_minutes' => $matchDuration,
                    'team_1_id' => $nonParticipatingTeams[0],
                    'team_2_id' => $nonParticipatingTeams[1],
                    'tournament_id' => $tournament->id,
                ]);
            }
        });

        return redirect()->route('games');
    }

    private function assignRound(array &$availablePairs, array &$nonParticipatingTeams, Collection $teams, bool $hasUnevenTeams)
    {
        $nonParticipatingTeam = null;

        if ($hasUnevenTeams) {
            foreach ($teams->shuffle() as $team)
            {
                if ($team != null && !in_array($team->id, $nonParticipatingTeams))
                {
                    $nonParticipatingTeam = $team;
                    $nonParticipatingTeams[] = $team->id;
                    break;
                }
            }
        }

        $usedTeams = [];
        if ($nonParticipatingTeam) $usedTeams[] = $nonParticipatingTeam->id;

        $roundMatches = [];
        shuffle($availablePairs);
        foreach ($availablePairs as $key => [$teamA, $teamB])
        {
            if (!in_array($teamA->id, $usedTeams) && !in_array($teamB->id, $usedTeams))
            {
                $roundMatches[] = [$teamA, $teamB];
                $usedTeams[] = $teamA->id;
                $usedTeams[] = $teamB->id;
                unset($availablePairs[$key]);
            }
        }

        return $roundMatches;
    }

    private function generateTimeSlots()
    {
        $slots = [];
        $time = new DateTime('08:00');
        $breakTimeInMinutes = 10;

        while ($time < new DateTime('20:00')) {
            $slots[] = $time->format('H:i');
            $time->modify('+90 minutes');
            $time->modify('+' . $breakTimeInMinutes . ' minutes');
        }

        return $slots;
    }
}
