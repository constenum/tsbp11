<?php

namespace App\Events;

use App\Models\Pick;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PicksSuccessfullySubmitted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $submitted_picks;
    public $user;

    public function __construct(Pick $submitted_picks)
    {
        $this->submitted_picks = $submitted_picks;
        $this->user = auth()->user();
    }

//    public function broadcastOn(): array
//    {
//        return [
//            new PrivateChannel('channel-name'),
//        ];
//    }
}
