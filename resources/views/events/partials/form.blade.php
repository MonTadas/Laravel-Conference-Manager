@csrf
<div class="mb-3">
    <label for="title-input" class="form-label">Conference title</label>
    <input type="text" name="title" id="title-input" class="form-control"
        value="{{ old('title', optional($conference ?? null)->title) }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="participant-max-input" class="form-label">Max amount of participants</label>
    <input type="number" name="maxParticipantCount" id="participant-max-input"
        class="form-control"value="{{ old('maxParticipantCount', optional($conference ?? null)->maxParticipantCount) }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="start-date-input">Start date time</label>
    <input type="datetime-local" name="start_dateTime"
        id="start-date-input"value="{{ old('start_dateTime', optional($conference ?? null)->start_dateTime) }}">

    @error('start_dateTime')
        <p>{{ $message }}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="end-date-input">End date time</label>
    <input type="datetime-local" name="end_dateTime"
        id="end-date-input"value="{{ old('end_dateTime', optional($conference ?? null)->end_dateTime) }}">

    @error('end_dateTime')
        <p>{{ $message }}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="content-input" class="form-label">Content</label>
    <textarea name="content" id="content-input" class="form-control">{{ old('content', optional($conference ?? null)->content) }}</textarea>
    @error('content')
        <p>{{ $message }}</p>
    @enderror
</div>
