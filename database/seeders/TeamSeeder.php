<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Ajax Amsterdam',
                'location' => 'Amsterdam',
                'user_id' => 1,
            ],
            [
                'name' => 'Feyenoord Rotterdam',
                'location' => 'Rotterdam',
                'user_id' => 1,
            ],
            [
                'name' => 'PSV Eindhoven',
                'location' => 'Eindhoven',
                'user_id' => 1,
            ],
            [
                'name' => 'FC Utrecht',
                'location' => 'Utrecht',
                'user_id' => 1,
            ],
            [
                'name' => 'AZ Alkmaar',
                'location' => 'Alkmaar',
                'user_id' => 1,
            ],
            [
                'name' => 'FC Twente',
                'location' => 'Enschede',
                'user_id' => 1,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
