<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Would you like to edit List Title for {{ $catalog->title }}?
        </h2>
    </x-slot>

    <form method="post" action="/catalog/{{$catalog->id}}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    @method('patch')
                    <div>
                        List Title: <input type="text" name="title" value="{{ old('title', $catalog->title) }}"/>
                        @error('title'){{ $message }}@enderror
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button type="submit">No Changes/Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    </form>

</x-app-layout>
