<?php

namespace App\Events;

use App\Models\Movie;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MovieAdded
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $movie;
    /**
     * Create a new event instance.
     */
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('movies'),
        ];
    }
}
