<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tournaments = [
            [
                'name' => 'Schoolvoetbal Kampioenschap 2025',
                'capacity' => 16,
                'location' => 'Amsterdam',
                'start_date' => '2025-12-01',
            ],
            [
                'name' => 'Regionale School Cup',
                'capacity' => 8,
                'location' => 'Rotterdam',
                'start_date' => '2025-12-15',
            ],
            [
                'name' => 'Jeugd Winter Toernooi',
                'capacity' => 12,
                'location' => 'Utrecht',
                'start_date' => '2026-01-10',
            ],
        ];

        foreach ($tournaments as $tournament) {
            Tournament::create($tournament);
        }
    }
}
