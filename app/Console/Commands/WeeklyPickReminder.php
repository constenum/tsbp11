<?php

namespace App\Console\Commands;

use App\Mail\WeeklyReminder;
use App\Models\Pick;
use App\Models\User;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class WeeklyPickReminder extends Command
{
    protected $signature = 'app:weekly-pick-reminder';

    protected $description = 'Email weekly pick reminder';

    public function handle()
    {
        $missing_picks = User::whereHas('picks', function($q){
            $q->where([
                ['week_id', '=', Week::where('is_active', true)->value('id')],
                ['pick_count', '<', Week::where('is_active', true)->value('max_picks')],
            ]);
        })->get();

        $no_picks = User::whereDoesntHave('picks', function($q){
            $q->where([
                ['week_id', '=', Week::where('is_active', true)->value('id')],
            ]);
        })->where('is_active', true)->get();

        $users = $missing_picks->concat($no_picks);

        foreach ($users as $user) {
            Mail::to($user->email)->send(new WeeklyReminder());
        }
    }
}
