<?php

namespace App\Models;

use Database\Factories\PodcastFactory;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

#[Guarded(['id'])]
class Podcast extends Model
{
    /** @use HasFactory<PodcastFactory> */
    use HasFactory;

    /**
     * Get the episodes for the podcast.
     */
    public function episodes(): HasMany
    {
        return $this->hasMany(Episode::class);
    }

    /**
     * Get all of the listening parties for the podcast.
     */
    public function listeningParties(): HasManyThrough
    {
        return $this->hasManyThrough(ListeningParty::class, Episode::class);
    }
}
