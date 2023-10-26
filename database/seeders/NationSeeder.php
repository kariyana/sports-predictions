<?php

namespace Database\Seeders;

use App\Models\Nation;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * state_id 1:アジア,2:アフリカ,3:ヨーロッパ,4:北アメリカ,5:南アメリカ,6:オセアニア
     */
    public function run(): void
    {
        Nation::create([
            "state_id" =>State::NAME["アジア"],
            "name" => "東京"
        ]);
        Nation::create([
            "state_id" =>State::NAME["アジア"],
            "name" => "韓国"
        ]);
        Nation::create([
            "state_id" =>State::NAME["ヨーロッパ"],
            "name" => "イングランド"
        ]);
        Nation::create([
            "state_id" =>State::NAME["ヨーロッパ"],
            "name" => "ドイツ"
        ]);
        Nation::create([
            "state_id" =>State::NAME["南アメリカ"],
            "name" => "ブラジル"
        ]);
    }
}
