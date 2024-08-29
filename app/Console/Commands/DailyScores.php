<?php

namespace App\Console\Commands;

use App\Models\Game;
use App\Models\Pick;
use App\Models\Team;
use App\Models\Week;
use DOMDocument;
use DOMXPath;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DailyScores extends Command
{
    protected $signature = 'app:daily-scores';

    protected $description = 'Scrape the game scores daily - every minute';

    public function handle(): void
    {
        $current_week = Week::where('is_active', true)->value('id');

        $ncaaf = [];
//        $ncaafPage = file_get_contents("https://sports.yahoo.com/college-football/scoreboard/?confId=1%2C4%2C6%2C7%2C8%2C11%2C71%2C72%2C87%2C90%2C122&schedState=3&dateRange=18");
        $ncaafPage = file_get_contents("https://sports.yahoo.com/college-football/scoreboard/?confId=1%2C4%2C6%2C7%2C8%2C11%2C71%2C72%2C87%2C90%2C122");
        $ncaafDoc = new DOMDocument();
        libxml_use_internal_errors(true);
        $ncaafDoc->loadHTML($ncaafPage);
        libxml_use_internal_errors(false);
        $ncaafXpath = new DomXPath($ncaafDoc);
        $ncaafQuery = $ncaafXpath->query('//*[contains(@class, "Fw(700)")] | //span[contains(@class, "Fw(400)")]');

        for($i=0;$i<$ncaafQuery->length;$i++) {
            $ncaaf[$i] = $ncaafQuery->item($i)->nodeValue;
        }

        $nfl = [];
        $nflPage = file_get_contents("https://sports.yahoo.com/nfl/scoreboard/");
        $nflDoc = new DOMDocument();
        libxml_use_internal_errors(true);
        $nflDoc->loadHTML($nflPage);
        libxml_use_internal_errors(false);
        $nflXpath = new DomXPath($nflDoc);
        $nflQuery = $nflXpath->query('//*[contains(@class, "Fw(700)") or contains(@class, "Fw(500)")] | //span[contains(@class, "Fw(400)")]');

        for($i=0;$i<$nflQuery->length;$i++) {
            if(str_starts_with($nflQuery->item($i)->nodeValue, "Odds:")) {
                continue;
            }

            $nfl[$i] = $nflQuery->item($i)->nodeValue;
        }

        $scores = array_merge($ncaaf, $nfl);


        for ($i = 0; $i < count($scores); $i += 7) {

            if ($scores[$i] == "") {
                $status = "Not Started";
            } elseif (str_starts_with($scores[$i], "Final")) {
                $status = "Final";
            } elseif (str_ends_with($scores[$i], "OT")) {
                $status = "Overtime";
            } elseif (str_ends_with($scores[$i], "1st")) {
                $status = "1st Qtr";
            } elseif (str_ends_with($scores[$i], "2nd")) {
                $status = "2nd Qtr";
            } elseif (str_ends_with($scores[$i], "3rd")) {
                $status = "3rd Qtr";
            } elseif (str_ends_with($scores[$i], "4th")) {
                $status = "4th Qtr";
            } elseif (str_ends_with($scores[$i], "Half")) {
                $status = "Halftime";
            } elseif ($scores[$i] == "Delay") {
                $status = "Delayed";
            } else {
                $status = "no status found";
            }


            if(subStr($scores[$i + 1], 0, 1) == "(") {
                $away_team = subStr($scores[$i + 1], strpos($scores[$i + 1], ")")+ 2, strlen($scores[$i + 1])) . " " . $scores[$i + 2];
            } else {
                $away_team = $scores[$i + 1] . " " . $scores[$i + 2];
            }

            $away_score = $scores[$i + 3];

            if(subStr($scores[$i + 4], 0, 1) == "(") {
                $home_team = subStr($scores[$i + 4], strpos($scores[$i + 4], ")")+ 2, strlen($scores[$i + 4])) . " " . $scores[$i + 5];
            } else {
                $home_team = $scores[$i + 4] . " " . $scores[$i + 5];
            }

            $home_score = $scores[$i + 6];

            $visitor = Team::where('name', $away_team)->value('id');

            $game = Game::where('away_team_id', $visitor)->where('week_id', $current_week)->get();

            if ($game->isEmpty()) {
                continue;
            }

            $game_id = $game[0]['id'];

            if ($status != "Not Started" and !Game::where('id', $game_id)->value('is_complete')) {
                Game::query()
                    ->where('id', $game_id)
                    ->update([
                        'home_score' => $home_score,
                        'away_score' => $away_score,
                        'status' => $status,
                    ]);
            }

            if ($status == "Final" and !Game::where('id', $game_id)->value('is_complete')) {
                $completed_game = Game::query()
                    ->where('id', $game_id)
                    ->get([
                        'id',
                        'home_team_id',
                        'home_score',
                        'home_spread',
                        'away_team_id',
                        'away_score',
                        'away_spread'
                    ]);

                $record_wins_losses = Pick::where('week_id', $current_week)->get();

                foreach ($record_wins_losses as $wins_loss) {
                    foreach (json_decode($wins_loss->picks, true) as $value) {
                        if (($completed_game->value('home_team_id') == $value and $completed_game->value('home_score') + $completed_game->value('home_spread') - $completed_game->value('away_score') > 0) or ($completed_game->value('away_team_id') == $value and $completed_game->value('away_score') + $completed_game->value('away_spread') - $completed_game->value('home_score') > 0)) {
                            Pick::query()
                                ->where('week_id', $current_week)
                                ->where('user_id', $wins_loss->user_id)
                                ->update([
                                    'wins' => DB::raw('wins+1')
                                ]);
                        } elseif ($completed_game->value('away_team_id') == $value or $completed_game->value('home_team_id') == $value) {
                            Pick::query()
                                ->where('week_id', $current_week)
                                ->where('user_id', $wins_loss->user_id)
                                ->update([
                                    'losses' => DB::raw('losses+1')
                                ]);
                        }
                    }
                }

                Game::where('id', $game_id)->update(['is_complete' => true,]);
            }
        }
    }
}
