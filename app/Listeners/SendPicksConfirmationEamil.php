<?php

namespace App\Listeners;

use App\Events\PicksSuccessfullySubmitted;
use App\Mail\PicksConfirmation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendPicksConfirmationEamil
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PicksSuccessfullySubmitted $event): void
    {
        $submitted_picks = $event->submitted_picks;
        $user = $event->user;

        Mail::to($user->email)->send(new PicksConfirmation($submitted_picks));
    }
}
