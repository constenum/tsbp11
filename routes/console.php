<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schedule;

Schedule::command('app:weekly-spreads')
    ->environments('local')
    ->timezone('America/New_York')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('spreads:weekly')
    ->environments('production')
    ->timezone('America/New_York')
    ->weeklyOn(3, '12:00')
    ->withoutOverlapping();

//Schedule::command('spreads:weekly')
//    ->environments('local')
//    ->timezone('America/New_York')
//    ->everyMinute()
//    ->withoutOverlapping();
//
//Schedule::command('scores:daily')
//    ->timezone('America/New_York')
//    ->everyMinute()
//    ->withoutOverlapping();
//
//Schedule::command('picks-reminder:weekly')
//    ->timezone('America/New_York')
//    ->weeklyOn(6, '11:20')
//    ->withoutOverlapping();
//
//Schedule::command('prize-money-distribution:weekly')
//    ->timezone('America/New_York')
//    ->weeklyOn(2, '12:00')
//    ->withoutOverlapping();
