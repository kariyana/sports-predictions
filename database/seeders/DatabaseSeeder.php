<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Game;
use App\Models\League;
use App\Models\State;
use App\Models\Studium;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(NationSeeder::class);
        $this->call(SportSeeder::class);
        $this->call(LeagueSeeder::class);
        $this->call(StudiumSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(GameSeeder::class);
    }
}
