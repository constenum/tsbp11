<?php

namespace App\Console\Commands;

use App\Models\Pick;
use App\Models\User;
use App\Models\Week;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class WeeklyPrizeMoneyPayout extends Command
{
    protected $signature = 'app:weekly-prize-money-payout';

    protected $description = 'Payout weekly prize money or add payout to the next week';

    public function handle()
    {
        $current_week = Week::find(Week::query()->where('is_active', true)->value('id'));
        $next_week = Week::find($current_week->id + 1);
        $weekly_payout = Week::where('is_active', true)->value('payout');
        Log::channel('payout')->info('======================');
        Log::channel('payout')->info('Current Week: '.$current_week->id);
        Log::channel('payout')->info('Weekly payout: '.$weekly_payout);

        $winners = Pick::query()
            ->where('week_id', Week::query()->where('is_active', true)->value('id'))
            ->where('wins', Week::query()->where('is_active', true)->value('max_picks'))
            ->get();

        if ($winners->isNotEmpty()) {
            foreach ($winners as $winner) {
                $user = User::find($winner->user_id);
                Log::channel('payout')->info('Winner: '.$user);
                $user->update(['winnings' => $user->winnings + round($weekly_payout / $winners->count())]);
                Log::channel('payout')->info('Winnings: '.round($weekly_payout / $winners->count()));
            }
            $next_week->update(['payout' => 45000]);
        } else {
            $current_week->update(['payout' => 0]);
            $next_week->update(['payout' => 45000 + $weekly_payout]);
        }

        Log::channel('payout')->info('Next Week Payout: '.$next_week->payout);
        Log::channel('payout')->info(' ');
    }
}
