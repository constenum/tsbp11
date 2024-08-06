<?php

namespace App\Http\Controllers;

use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $week = Week::query()->where('is_active', true)->value('id');

        $weekly_wins_losses = collect(DB::select('
        SELECT
            picks.user_id,
            users.name,
            picks.week_id,
            picks.wins,
            picks.losses,
            users.winnings,
            totals.total_wins,
            totals.total_losses
        FROM picks
        INNER JOIN users ON picks.user_id = users.id
        INNER JOIN (
            SELECT
                user_id,
                SUM(wins) AS total_wins,
                SUM(losses) AS total_losses
            FROM picks
            GROUP BY user_id
        ) AS totals ON picks.user_id = totals.user_id
        ORDER BY totals.total_wins DESC, totals.total_losses ASC, users.name ASC, picks.week_id ASC
        '))->groupBy('name', true)->toArray();

        return view('dashboard', compact('week', 'weekly_wins_losses'));
    }
}
