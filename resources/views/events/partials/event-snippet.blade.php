<div class="mb-3 snippet">
    <header>
        <h3>
            <a class="event-link"
                href="{{ route('events.show', ['conference' => $conference]) }}">{{ $conference->title }}</a>
        </h3>
        <div>
            @if ($conference->updated_at > $conference->created_at)
                <p class="post-date"><i>Updated at: {{ $conference->updated_at->format('Y-m-d H:i:s') }}</i></p>
            @elseif($conference->created_at == $conference->updated_at)
                <p class="post-date"><i>Created at: {{ $conference->created_at->format('Y-m-d H:i:s') }}</i></p>
            @endif
        </div>

    </header>
    {!! $conference->snippet !!}
</div>
