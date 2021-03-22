<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $recipe->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <form method="post" action="/ingredient">
                            @csrf
                            <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                            Add Ingredient:<input name="component">
                            Add Amount:<input name="amount">
                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Ingredients list per Amount:
                    @foreach($recipe->ingredients as $ingredient)
                        <div>{{ $ingredient->component }} - {{ $ingredient->amount }}
                            <form method="post" action="/ingredient/{{ $ingredient->id }}">
                                @csrf
                                @method('patch')
                                <input name="component" type="text" value="{{ $ingredient->component }}">
                                <button type="submit">Update Ingredient</button>
                                <input name="amount" type="text" value="{{$ingredient->amount}}">
                                <button type="submit">Update Amount</button>
                            </form>
                            <form method="post" action="/ingredient/{{ $ingredient->id }}">
                                @csrf
                                @method('delete')
                                <button>Delete - {{ $ingredient->component }}</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/recipe">Click here when done</a>
                    <ul>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
