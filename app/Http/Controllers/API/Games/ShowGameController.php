<?php

namespace App\Http\Controllers\API\Games;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\State;
use Illuminate\Http\Request;

class ShowGameController extends Controller
{
    public function showGames(Request $request)
    {
        $games = Game::all();
        $bb = State::NAME["ヨーロッパ"];
        return response()->json(["games" => $games,"aa"=>$bb],200,[]);
    }
}
