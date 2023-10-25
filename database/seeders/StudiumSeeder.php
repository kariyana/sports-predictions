<?php

namespace Database\Seeders;

use App\Models\Studium;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Studium::create([
            "id" =>1,
            "name" => "ファルマー・スタジアム",
        ]);
        Studium::create([
            "id" => 2,
            "name" => "クレイヴン・コテージ",
        ]);
    }
}
