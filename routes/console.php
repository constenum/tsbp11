<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schedule;

Schedule::command('app:weekly-spreads')
    ->environments('local')
    ->timezone('America/New_York')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('app:weekly-spreads')
    ->environments('production')
    ->timezone('America/New_York')
    ->weeklyOn(3, '12:05')
    ->withoutOverlapping();

Schedule::command('app:daily-scores')
    ->timezone('America/New_York')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('app:weekly-pick-reminder')
    ->timezone('America/New_York')
    ->weeklyOn(6, '11:20')
    ->withoutOverlapping();

Schedule::command('app:weekly-prize-money-payout')
    ->timezone('America/New_York')
    ->weeklyOn(2, '12:00')
    ->withoutOverlapping();
