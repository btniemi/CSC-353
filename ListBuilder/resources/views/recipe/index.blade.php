<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Recipes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/recipe/create">Add a New Recipe</a>
                    <ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Your list of created recipes:
                        @foreach($recipes as $recipe)
                            <li>
                                <a href="/recipe/{{ $recipe->id }}/edit">{{ $recipe->name }}</a>
                                <form method="post" action="/recipe/{{ $recipe->id }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete Above Recipe</button>
                                </form>
                            </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/">List Builder Home</a>
                    <ul>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
