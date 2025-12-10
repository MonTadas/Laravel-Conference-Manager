<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateConferenceParticipantsRequest;
use App\Models\Conference;
use App\Models\ConferenceParticipants;

class ConferenceParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Conference $conference)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Conference $conference)
    {
        if (! $conference->getAttendanceEntries()->where('user_id', auth()->id())->exists() ||
        ! $conference->isFull()) {
            ConferenceParticipants::create(['conference_id' => $conference->id, 'user_id' => auth()->user()->id]);
        }

        return redirect()->route('events.show', $conference);
    }

    /**
     * Display the specified resource.
     */
    public function show(ConferenceParticipants $conferenceParticipants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConferenceParticipants $conferenceParticipants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConferenceParticipantsRequest $request, ConferenceParticipants $conferenceParticipants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conference $conference)
    {
        ConferenceParticipants::where('conference_id', $conference->id)
            ->where('user_id', auth()->id())->delete();

        return redirect()->route('events.show', $conference);
    }
}
