<?php

namespace App\Models;

use Database\Factories\ListeningPartyFactory;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

#[Guarded(['id'])]
class ListeningParty extends Model
{
    /** @use HasFactory<ListeningPartyFactory> */
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'start_time' => 'datetime',
            'end_time' => 'datetime',
        ];
    }

    /**
     * Get the episode that owns the listening party.
     */
    public function episode(): BelongsTo
    {
        return $this->belongsTo(Episode::class);
    }

    /**
     * Get the messages for the listening party.
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Get the podcast.
     */
    public function podcast(): HasOneThrough
    {
        return $this->hasOneThrough(Podcast::class, Episode::class, 'id', 'id', 'episode_id', 'podcast_id');
    }
}
