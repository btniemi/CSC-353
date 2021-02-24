<form method="post" action="/buildList/{{$buildList->id}}">
    @csrf
    @method('patch')
    <div>
        List Title: <input type="text" name="list_type" value="{{ old('list_type', $buildList->list_type) }}"/>
        @error('list title'){{ $message }}@enderror
    </div>

    <div>
        Item:
        <textarea name="item">{{ old('item', $buildList->item) }}</textarea>
        @error('item'){{ $message }}@enderror
    </div>

    <button type="submit">Save</button>
</form>
