@extends("layouts.base")

@section("title", "Edit conference")

@section("content")
<form action="{{ route("events.update", ['conference'=>$conference]) }}" method="POST">
    @include("events.partials.form")
    <Button type="submit" class="btn btn-primary">Update</Button>
</form>
@endsection
