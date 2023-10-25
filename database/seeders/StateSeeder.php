<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create([
            'name' => 'アジア',
        ]);
        State::create([
            'name' => 'アフリカ',
        ]);
        State::create([
            'name' => 'ヨーロッパ',
        ]);
        State::create([
            'name' => '北アメリカ',
        ]);
        State::create([
            'name' => '南アメリカ',
        ]);
        State::create([
            'name' => 'オセアニア',
        ]);

    }
}
