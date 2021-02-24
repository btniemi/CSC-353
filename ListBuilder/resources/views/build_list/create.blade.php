<form method="post" action="/buildList">
    @csrf
    <div>
        List Title: <input type="text" name="list_type" value="{{ old('list_type') }}"/>
        @error('list_type'){{ $message }}@enderror
    </div>

    <div>
        Item:
        <textarea name="item">{{ old('item') }}</textarea>
        @error('description'){{ $message }}@enderror
    </div>

    <button>Save List</button>
</form>
