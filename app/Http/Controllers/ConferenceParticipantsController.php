<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceParticipantsRequest;
use App\Http\Requests\UpdateConferenceParticipantsRequest;
use App\Models\ConferenceParticipants;

class ConferenceParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function store(StoreConferenceParticipantsRequest $request)
    {
        //
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
    public function destroy(ConferenceParticipants $conferenceParticipants)
    {
        //
    }
}
