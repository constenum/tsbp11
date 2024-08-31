<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\PickController;
use App\Http\Controllers\PickSummaryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeekController;
use App\Models\Game;
use App\Models\Pick;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    $week = Week::query()->where('is_active', true)->value('id');
    $reveal_picks = Carbon::create(Week::query()->where('is_active', true)->value('start_at'))->addDays(3)->addHours(12);
    $max_picks = Week::query()->where('is_active', true)->value('max_picks');

    $games = Game::with(['home_team', 'away_team'])->whereHas('week', function ($query) {
        $query->where('is_active', true);
    })->orderBy('start_at')->get();

    $picks = [];
    $json = json_decode(Pick::where('user_id', Auth::id())->where('week_id', $week)->value('picks'));

    if ($json != null) {
        foreach ($json as $value) {
            $picks[] = $value;
        }
    }

    return view('test', compact('week', 'reveal_picks', 'max_picks', 'games', 'picks'));

//    return view('test');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', ResultsController::class);
    Route::get('/dashboard', ResultsController::class)->name('results');
    Route::get('/picks', [PickController::class, 'index'])->name('picks.index');
    Route::post('/picks', [PickController::class, 'store'])->name('picks.store');
    Route::get('/current', [PickController::class, 'current'])->name('picks.current');
    Route::resource('/games', GameController::class);
});

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'can:admin_area']], function () {
    Route::resource('/users', UserController::class);
    Route::resource('/teams', TeamController::class);
    Route::resource('/weeks', WeekController::class);
});

require __DIR__.'/auth.php';
