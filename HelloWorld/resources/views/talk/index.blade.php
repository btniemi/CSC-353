    <a href="/talk/create">Add new talk</a>
    <ul>
        @foreach($talks as $talk)
            <li>
                <a href="/talk/{{ $talk->id }}/edit">{{ $talk->title }}</a>
                <form method="post" action="/talk/{{ $talk->id }}">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
