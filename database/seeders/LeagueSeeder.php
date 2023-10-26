<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        League::create([
            "id" => 1,
            "sport_id" => 1,
            "name" => "プレミアリーグ"
        ]);
        League::create([
            "id" => 2,
            "sport_id" => 1,
            "name" => "ラ・リーガ"
        ]);
        League::create([
            "id" => 3,
            "sport_id" => 1,
            "name" => "ブンデスリーガ"
        ]);
        League::create([
            "id" => 4,
            "sport_id" => 1,
            "name" => "リーグアン"
        ]);
        League::create([
            "id" => 5,
            "sport_id" => 1,
            "name" => "セリエA"
        ]);
        League::create([
            "id" => 1,
            "sport_id" => 1,
            "name" => "J1リーグ"
        ]);
        League::create([
            "id" => 1,
            "sport_id" => 1,
            "name" => "国際親善試合"
        ]);
        League::create([
            "id" => 1,
            "sport_id" => 1,
            "name" => "CL"
        ]);
        League::create([
            "id" => 1,
            "sport_id" => 1,
            "name" => "EL"
        ]);
    }
}
