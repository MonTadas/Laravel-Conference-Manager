@extends("layouts.base")

@section("title", "Conferences")

@section("content")
@each('events.partials.event-snippet', $conferences, 'conference')
@endsection
