<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test user with admin role
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'admin',
        ]);

        // Create referee user
        User::factory()->create([
            'name' => 'Jan Scheidsrechter',
            'email' => 'referee@example.com',
            'role' => 'referee',
        ]);

        // Create regular user
        User::factory()->create([
            'name' => 'Piet Coach',
            'email' => 'coach@example.com',
            'role' => 'user',
        ]);

        // Seed other tables
        $this->call([
            TeamSeeder::class,
            TournamentSeeder::class,
            TournamentTeamSeeder::class,
            GameSeeder::class,
            PlayerSeeder::class,
        ]);
    }
}
