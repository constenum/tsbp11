<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Pick;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $week = Week::query()->where('is_active', true)->value('id');
        $reveal_picks = \Carbon\Carbon::create(Week::query()->where('is_active', true)->value('start_at'));
        $reveal_picks2 = \Carbon\Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->addDays(3)->addHours(17);

        $reveal_picks3 = \Carbon\Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->setTimezone("America/New_York");
        $reveal_picks4 = \Carbon\Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->setTimezone("America/New_York")->addDays(3)->addHours(17);

        $games = Game::with(['home_team', 'away_team'])->whereHas('week', function ($query) {
            $query->where('is_active', true);
        })->orderBy('start_at')->get();

        return view('games.index', compact('week', 'games', 'reveal_picks', 'reveal_picks2', 'reveal_picks3', 'reveal_picks4'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
