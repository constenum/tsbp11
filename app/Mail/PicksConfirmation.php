<?php

namespace App\Mail;

use AllowDynamicProperties;
use App\Models\Game;
use App\Models\Pick;
use App\Models\Team;
use App\Models\Week;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

#[AllowDynamicProperties] class PicksConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Picks Confirmation',
        );
    }

    public function content(): Content
    {
        $week = Week::where('is_active', true)->value('id');
        $json = json_decode(Pick::where('user_id', Auth::id())->where('week_id', $week)->value('picks'));

        $pick_games = [];
        $pick_teams = [];

        foreach ($json as $key => $value) {
            $pick_games[] = $key;
            $pick_teams[] = $value;
        }

        $games = Game::whereIn('id', $pick_games)->get();
        $pick_confirmation = [];

        foreach ($games as $game) {
            $pick = [];
            if (in_array($game->home_team_id, $pick_teams)) {
                $pick['pick'] = Team::where('id', $game->home_team_id)->value('yahoo_name');
                $pick['spread'] = $game->home_spread;
                $pick['opponent'] = Team::where('id', $game->away_team_id)->value('yahoo_name');
            } elseif (in_array($game->away_team_id, $pick_teams)) {
                $pick['pick'] = Team::where('id', $game->away_team_id)->value('yahoo_name');
                $pick['spread'] = $game->away_spread;
                $pick['opponent'] = Team::where('id', $game->home_team_id)->value('yahoo_name');
            }
            $pick_confirmation[] = $pick;
        }

        return new Content(
            view: 'emails.picks-confirmation',
            with: [
                'pick_confirmation' => $pick_confirmation,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
