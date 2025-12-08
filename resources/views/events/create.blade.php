@extends('layouts.base')

@section('title', 'Create conference')

@section('content')
    <form action="{{ route('events.store') }}" method="POST">
        @include("events.partials.form")

        <Button type="submit" class="btn btn-primary">Create</Button>
    </form>
@endsection
