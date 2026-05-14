<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EmojiReactionEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(protected $listeningPartyId, protected $emoji, protected $userId)
    {
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|Channel[]|string[]|string
     */
    public function broadcastOn(): Channel|array
    {
        return [
            new PrivateChannel('listening-party.'.$this->listeningPartyId),
        ];
    }

    /**
     * Get the name the event should broadcast as.
     */
    public function broadcastAs(): string
    {
        return 'emoji-reaction';
    }

    /**
     * Get the payload the event should broadcast with.
     *
     * @return array<string, mixed>
     */
    public function broadcastWith(): array
    {
        return [
            'emoji' => $this->emoji,
            'userId' => $this->userId,
        ];
    }
}
