<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            // Ajax Amsterdam (Team 1)
            ['name' => 'Jan de Vries', 'shirt_number' => 1, 'team_id' => 1],
            ['name' => 'Piet Jansen', 'shirt_number' => 2, 'team_id' => 1],
            ['name' => 'Klaas Mulder', 'shirt_number' => 3, 'team_id' => 1],
            ['name' => 'Henk Bakker', 'shirt_number' => 4, 'team_id' => 1],
            ['name' => 'Tom Visser', 'shirt_number' => 5, 'team_id' => 1],

            // Feyenoord Rotterdam (Team 2)
            ['name' => 'Lars van Dijk', 'shirt_number' => 1, 'team_id' => 2],
            ['name' => 'Simon Bos', 'shirt_number' => 2, 'team_id' => 2],
            ['name' => 'Ruben Smit', 'shirt_number' => 3, 'team_id' => 2],
            ['name' => 'Thijs de Boer', 'shirt_number' => 4, 'team_id' => 2],
            ['name' => 'Daan Koster', 'shirt_number' => 5, 'team_id' => 2],

            // PSV Eindhoven (Team 3)
            ['name' => 'Max Hendriks', 'shirt_number' => 1, 'team_id' => 3],
            ['name' => 'Lucas van Leeuwen', 'shirt_number' => 2, 'team_id' => 3],
            ['name' => 'Finn de Groot', 'shirt_number' => 3, 'team_id' => 3],
            ['name' => 'Sem Peters', 'shirt_number' => 4, 'team_id' => 3],
            ['name' => 'Jesse Willems', 'shirt_number' => 5, 'team_id' => 3],

            // FC Utrecht (Team 4)
            ['name' => 'Noah van der Berg', 'shirt_number' => 1, 'team_id' => 4],
            ['name' => 'Bram Jacobs', 'shirt_number' => 2, 'team_id' => 4],
            ['name' => 'Tim van den Brink', 'shirt_number' => 3, 'team_id' => 4],
            ['name' => 'Stijn Vermeulen', 'shirt_number' => 4, 'team_id' => 4],
            ['name' => 'Luuk Meijer', 'shirt_number' => 5, 'team_id' => 4],

            // AZ Alkmaar (Team 5)
            ['name' => 'Milan Dekker', 'shirt_number' => 1, 'team_id' => 5],
            ['name' => 'Sam van Dam', 'shirt_number' => 2, 'team_id' => 5],
            ['name' => 'Jayden Schouten', 'shirt_number' => 3, 'team_id' => 5],
            ['name' => 'Ryan de Wit', 'shirt_number' => 4, 'team_id' => 5],
            ['name' => 'Sven Koning', 'shirt_number' => 5, 'team_id' => 5],

            // FC Twente (Team 6)
            ['name' => 'Levi Brouwer', 'shirt_number' => 1, 'team_id' => 6],
            ['name' => 'Owen Vos', 'shirt_number' => 2, 'team_id' => 6],
            ['name' => 'Mees van Dijk', 'shirt_number' => 3, 'team_id' => 6],
            ['name' => 'David Jansen', 'shirt_number' => 4, 'team_id' => 6],
            ['name' => 'Matthijs de Haan', 'shirt_number' => 5, 'team_id' => 6],
        ];

        foreach ($players as $player) {
            Player::create($player);
        }
    }
}
