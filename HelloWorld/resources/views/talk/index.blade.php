    <ul>
        @foreach($talks as $talk)
            <li>
                <a href="/talk/{{ $talk->id }}/edit">{{ $talk->title }}</a>
            </li>
        @endforeach
    </ul>
