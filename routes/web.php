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
use App\Models\Team;
use App\Models\User;
use App\Models\Week;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {

    return view('test');
});

Route::get('/mailable', function () {

    return new App\Mail\PicksConfirmation();
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
