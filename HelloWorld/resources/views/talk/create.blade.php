    <form method="post" action="/talk">
        @csrf
        <div>
            Name: <input type="text" name="title" value="{{ old('title') }}"/>
            @error('title'){{ $message }}@enderror
        </div>

        <div>
            Description:
            <textarea name="description">{{ old('description') }}</textarea>
            @error('description'){{ $message }}@enderror
        </div>

        <button> Save Talk</button>
    </form>
