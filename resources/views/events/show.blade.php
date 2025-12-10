@extends('layouts.base')
@section('title', $conference->title)

@section('content')
    <div class="mb-3">
        <header>
            <h3>{{ $conference->title }}</h3>
            <div>
                <p class="post-date"><i>Created at: {{ $conference->created_at->format('Y-m-d H:i:s') }}</i></p>

                @if ($conference->updated_at != $conference->created_at)
                    <p class="post-date"><i>Updated at: {{ $conference->updated_at->format('Y-m-d H:i:s') }}</i></p>
                @endif
                <div style="display: flex; gap:10px;">
                    @auth
                        @include('events.partials.participation-form')
                    @endauth

                    @can('admin')
                        <a class="btn btn-warning btn-sm" href="{{ route('events.edit', $conference) }}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="{{ route('events.destroy', $conference) }}">Delete</a>
                    @endcan
                </div>

            </div>
        </header>
        <h6>Maximum participant amount: {{ $conference->maxParticipantCount }}</h6>
        <h5>Event start date time: {{ $conference->start_dateTime }} <br>End date time: {{ $conference->end_dateTime }}</h5>
        {!! $conference->content !!}
    </div>
@endsection
