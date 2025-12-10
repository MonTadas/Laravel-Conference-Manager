@if ($isAttending)
    <form action="{{ route('events.participation.destroy', ['conference' => $conference]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-outline-danger btn-sm" value="Cancel attendance">
    </form>
@elseif(!$conference->isFull())
    <form action="{{ route('events.participation.store', ['conference' => $conference]) }}" method="POST">
        @csrf
        <input type="submit" class="btn btn-outline-primary btn-sm" value="Mark attendance">
    </form>
@endif
