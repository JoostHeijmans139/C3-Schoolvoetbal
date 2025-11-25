<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TournamentTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tournamentTeams = [
            // Schoolvoetbal Kampioenschap 2025 (Tournament 1) - All 6 teams
            ['tournament_id' => 1, 'team_id' => 1],
            ['tournament_id' => 1, 'team_id' => 2],
            ['tournament_id' => 1, 'team_id' => 3],
            ['tournament_id' => 1, 'team_id' => 4],
            ['tournament_id' => 1, 'team_id' => 5],
            ['tournament_id' => 1, 'team_id' => 6],

            // Regionale School Cup (Tournament 2) - 4 teams
            ['tournament_id' => 2, 'team_id' => 1],
            ['tournament_id' => 2, 'team_id' => 2],
            ['tournament_id' => 2, 'team_id' => 3],
            ['tournament_id' => 2, 'team_id' => 4],

            // Jeugd Winter Toernooi (Tournament 3) - 4 teams
            ['tournament_id' => 3, 'team_id' => 3],
            ['tournament_id' => 3, 'team_id' => 4],
            ['tournament_id' => 3, 'team_id' => 5],
            ['tournament_id' => 3, 'team_id' => 6],
        ];

        foreach ($tournamentTeams as $tournamentTeam) {
            DB::table('tournamentteams')->insert($tournamentTeam);
        }
    }
}
