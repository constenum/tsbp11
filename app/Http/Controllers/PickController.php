<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePickRequest;
use App\Mail\PicksConfirmation;
use App\Models\Game;
use App\Models\Pick;
use App\Models\Team;
use App\Models\User;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PickController extends Controller
{
    public function index() : View
    {
        $week = Week::query()->where('is_active', true)->value('id');
        $reveal_picks = Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->addDays(3)->addHours(16);
        $max_picks = Week::query()->where('is_active', true)->value('max_picks');

        $games = Game::with(['home_team', 'away_team'])->whereHas('week', function ($query) {
            $query->where('is_active', true);
        })->orderBy('start_at')->get();

        $json = json_decode(Pick::where('user_id', Auth::id())->where('week_id', $week)->value('picks'));

        $picks = [];

        if ($json != null) {
            foreach ($json as $value) {
                $picks[] = $value;
            }
        }

        return view('picks.index', compact('week', 'reveal_picks', 'max_picks', 'games', 'picks'));
    }

    public function store(StorePickRequest $request) : RedirectResponse
    {
        $data = $request->except('_token');

        $picks = [];

        foreach ($data as $key => $value) {
            if (str_starts_with($key, 'game')) {
                $picks[str_replace("game","",$key)] = $value;
            }
        }

        Pick::updateOrCreate(
            ['user_id' => $request->user_id, 'week_id' => $request->week_id],
            ['pick_count' => $request->pick_count, 'picks' => json_encode($picks),]
        );

        Mail::to($request->user())->send(new PicksConfirmation());

        Log::channel('picks')->info('DateTime: '.Carbon::now());
        Log::channel('picks')->info('User ID: '.$request->user_id);
        Log::channel('picks')->info('Picks: '.json_encode($picks));
        Log::channel('picks')->info(' ');

        session()->flash('success', 'Your picks have been saved! An email confirmation has also been sent.');

        return redirect()->route('picks.index');
    }

    public function current() : View
    {
        $week = Week::query()->where('is_active', true)->value('id');
        $reveal_picks = Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->addDays(3)->addHours(16);
        $max_picks = Week::query()->where('is_active', true)->value('max_picks');
        $picks_check = Pick::with('user')->orderBy(User::select('name')->whereColumn('users.id', 'picks.user_id'))->where('week_id', $week)->get();
        $picks = DB::table('picks')->select('user_id', 'week_id', 'picks', 'pick_count', 'wins', 'losses')->where('week_id', $week);
        $users = DB::table('users')->where('is_active', true)->leftJoinSub($picks, 'picks', function ($join){$join->on('users.id', '=', 'picks.user_id');})->orderBy('name')->get();
        $users_picks = $users->toArray();
        return view('picks.current', compact('week', 'reveal_picks', 'max_picks', 'users_picks', 'picks_check'));
    }
}
