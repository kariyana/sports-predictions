<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            "date" => "2023-10-29-23:00.00",
            "section" =>10,
            "league_id" => 1,
            "home_team_id" =>1,
            "away_team_id" =>2,
        ]);
    }
}
