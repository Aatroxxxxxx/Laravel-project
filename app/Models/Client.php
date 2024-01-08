<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Client extends Model
{
    protected $fillable = ['fname','lname', 'email', 'password'];

    public function hostedEvents(): HasMany
    {
        return $this->hasMany(Event::class, 'host_client_id');
    }

    public function attendingEvents(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'client_attending')->withTimestamps();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function interestedEvents(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'interested_clients')->withTimestamps();
    }
}