    <form method="post" action="/talk/{{$talk->id}}">
        @csrf
        @method('patch')
        <div>
            Name: <input type="text" name="title" value="{{ old('title', $talk->title) }}"/>
            @error('title'){{ $message }}@enderror
        </div>

        <div>
            Description:
            <textarea name="description">{{ old('description', $talk->description) }}</textarea>
            @error('description'){{ $message }}@enderror
        </div>

        <button type="submit">Save</button>
    </form>
