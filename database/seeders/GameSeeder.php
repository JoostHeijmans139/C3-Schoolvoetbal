<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'start' => '2025-12-01 10:00:00',
                'duration_in_minutes' => 45,
                'team_1_id' => 1,
                'team_2_id' => 2,
            ],
            [
                'start' => '2025-12-01 11:00:00',
                'duration_in_minutes' => 45,
                'team_1_id' => 3,
                'team_2_id' => 4,
            ],
            [
                'start' => '2025-12-01 12:00:00',
                'duration_in_minutes' => 45,
                'team_1_id' => 5,
                'team_2_id' => 6,
            ],
            [
                'start' => '2025-12-01 14:00:00',
                'duration_in_minutes' => 45,
                'team_1_id' => 1,
                'team_2_id' => 3,
            ],
            [
                'start' => '2025-12-01 15:00:00',
                'duration_in_minutes' => 45,
                'team_1_id' => 2,
                'team_2_id' => 4,
            ],
            [
                'start' => '2025-12-01 16:00:00',
                'duration_in_minutes' => 45,
                'team_1_id' => 5,
                'team_2_id' => 1,
            ],
        ];

        foreach ($games as $game) {
            Game::create($game);
        }
    }
}
