<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sport::create([
            "id" => 1,
            "name" => "soccer",
        ]);
        Sport::create([
            "id" => 2,
            "name" => "baseball",
        ]);
    }
}
