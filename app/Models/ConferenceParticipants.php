<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConferenceParticipants extends Model
{
    /** @use HasFactory<\Database\Factories\ConferenceParticipantsFactory> */
    use HasFactory;

    protected $fillable=[
        'conference_id', 'user_id'
    ];
}
