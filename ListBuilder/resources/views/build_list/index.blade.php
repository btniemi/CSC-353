<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Build a List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/list/create">Make a new list</a>
                    <ul>
                        @foreach($buildLists as $buildList)
                            <li>
                                <a href="/list/{{ $buildList->id }}/edit">{{ $buildList->list_type }}</a>
                                <form method="post" action="/buildList/{{ $buildList->id }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete List</button>
                                </form>
                            </li>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

