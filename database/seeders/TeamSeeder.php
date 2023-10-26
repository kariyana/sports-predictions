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
        Team::create([
            "league_id" => 1,
            "studium_id" => 3,
            "name" => "マンチェスターシティ",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 3,
            "name" => "マンチェスターユナイテッド",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 4,
            "name" => "トッテナム",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 5,
            "name" => "リヴァプール",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 6,
            "name" => "アーセナル",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 7,
            "name" => "アストン・ヴィラ",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 8,
            "name" => "ニューカッスル",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 9,
            "name" => "ルートンタウン",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 10,
            "name" => "ウェストハム",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 11,
            "name" => "クリスタル・パレス",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 12,
            "name" => "チェルシー",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 13,
            "name" => "ボーンマス",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 14,
            "name" => "ブレントフォード",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 15,
            "name" => "エヴァートン",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 16,
            "name" => "バーンリー",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 17,
            "name" => "ノッティンガム・フォレスト",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 18,
            "name" => "シェフィールド・ユナイテッド",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 19,
            "name" => "ウルブス",
        ]);
        Team::create([
            "league_id" => 1,
            "studium_id" => 20,
            "name" => "ウルブス",
        ]);
    }
}
