<?php

namespace App\Console\Commands;

use App\Models\Game;
use App\Models\Team;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WeeklySpreads extends Command
{
    protected $signature = 'app:weekly-spreads';

    protected $description = 'Pull weekly spreads via API';

    public function handle()
    {
        $weeks = Week::query()->get(['id', 'start_at', 'is_active']);

        foreach ($weeks as $week) {
            if (Carbon::now()->toDateString() == Carbon::create($week->start_at)->toDateString()) {
                Week::query()->where('id', $week->id)->update(['is_active' => true]);
                break;
            } elseif ($week->is_active) {
                Week::query()->where('id', $week->id)->update(['is_active' => false]);
            }
        }

        $sports = ['americanfootball_ncaaf', 'americanfootball_nfl'];
        $current_week = Week::query()->where('is_active', true)->value('id');
        $end_date = Carbon::create(Week::where('is_active', true)->value('start_at'))->addDays(6)->toDateString();
        $games_array = [];

        Log::channel('spreads')->info('======================');
        Log::channel('spreads')->info('Current Week: '.$current_week->id);

        foreach ($sports as $sport) {
            $response = Http::get('https://api.the-odds-api.com/v4/sports/'.$sport.'/odds/?apiKey=e477ff82aaf4aa4f705720b0f55930df&regions=us&markets=spreads');
            $collection = collect(json_decode($response, true));

            for ($i = 0; $i < $collection->count(); $i++) {
                $game_array = [];
                $home_team = trim($collection->pluck('home_team')[$i]);
                $away_team = trim($collection->pluck('away_team')[$i]);
                $start = Carbon::parse(trim($collection->pluck('commence_time')[$i]))->setTimezone('America/New_York')->format('Y:m:d H:i:s');

                $odds = 0;
                $stop = true;
                $home_spreads = collect();

                if ($home_team == $collection->pluck('bookmakers.0.markets.0.outcomes.0.name')[$i]) {
                    do {
                        $home_spreads->push($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.0.point')[$i]);
                        $odds++;
                        if ($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.0.point')[$i] == null) {
                            $stop = false;
                        }
                    } while ($stop);

                } else {
                    do {
                        $home_spreads->push($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.1.point')[$i]);
                        $odds++;
                        if ($collection->pluck('bookmakers.' . $odds . '.markets.0.outcomes.1.point')[$i] == null) {
                            $stop = false;
                        }
                    } while ($stop);

                }
                $home_spread = trim($home_spreads->max());

                if ($home_team == null
                    or $away_team == null
                    or $home_spread == null
                    or Team::query()->where('odds_api_name', $home_team)->value('id') == null
                    or Team::query()->where('odds_api_name', $away_team)->value('id') == null
                    or Game::query()->where('start_at', $start)->where('home_team_id', Team::query()->where('odds_api_name', $home_team)->value('id'))->first()
                    or Carbon::create($start) >= Carbon::create($end_date)) {
                    continue;
                }

                if ($home_spread / 1 - floor($home_spread / 1) > 0) {
                    if ($home_spread < 0) {
                        $home_spread -= 0.5;
                    } else {
                        $home_spread += 0.5;
                    }
                }

                $game_array['week_id'] = $current_week;
                $game_array['start_at'] = $start;
                $game_array['home_team_id'] = Team::query()->where('odds_api_name', $home_team)->value('id');
                $game_array['home_spread'] = $home_spread;
                $game_array['away_team_id'] = Team::query()->where('odds_api_name', $away_team)->value('id');
                $game_array['away_spread'] = -$home_spread;
                $game_array['created_at'] = Carbon::now();
                $game_array['updated_at'] = Carbon::now();
                $games_array[] = $game_array;

                Log::channel('spreads')->info('game time: '. $start);
                Log::channel('spreads')->info('home team: '. Team::query()->where('odds_api_name', $home_team)->value('id'));
                Log::channel('spreads')->info('home spread: '. $home_spread);
                Log::channel('spreads')->info('away team: '. Team::query()->where('odds_api_name', $away_team)->value('id'));
                Log::channel('spreads')->info('away spread: '. -$home_spread);
            }
        }

        usort($games_array, function ($game1, $game2) {
            return $game1['start_at'] <=> $game2['start_at'];
        });

        foreach($games_array as $game_array) {
            Log::info($game_array);
            Game::insert($game_array);
        }
    }
}
