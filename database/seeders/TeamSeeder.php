<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            "league_id" => 1,
            "studium_id" => 1,
            "name" => "ブライトン",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 2,
            "name" => "フラムFC",
        ]);
    }
}
