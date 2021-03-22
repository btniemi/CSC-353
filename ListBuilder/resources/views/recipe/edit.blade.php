<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Would you like to edit Recipe Title and Instructions for {{ $recipe->name }}?
        </h2>
    </x-slot>

    <form method="post" action="/recipe/{{$recipe->id}}">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    @method('patch')
                    <div>
                        Recipe Title: <input type="text" name="name" value="{{ old('name', $recipe->name) }}"/>
                        @error('name'){{ $message }}@enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @csrf
                    @method('patch')
                    <div>
                        Instructions: <textarea name="description">{{ old('description', $recipe->description) }}</textarea>
                        @error('description'){{ $message }}@enderror
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
