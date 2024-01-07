<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Event extends Model
{
    protected $fillable = ['host_client_id', 'title', 'description', 'start_datetime', 'end_datetime', 'location'];

    public function host(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'host_client_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'event_category')->withTimestamps();
    }

    public function attendees(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'client_attending')->withTimestamps();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function interestedClients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'interested_clients')->withTimestamps();
    }
}