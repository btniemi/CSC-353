<a href="/buildList/create">Make a new list</a>
<ul>
    @foreach($buildLists as $buildList)
        <li>
            <a href="/buildList/{{ $buildList->id }}/edit">{{ $buildList->list_type }}</a>
            <form method="post" action="/buildList/{{ $buildList->id }}">
                @csrf
                @method('delete')
                <button type="submit">Delete List</button>
            </form>
        </li>
    @endforeach
</ul>
