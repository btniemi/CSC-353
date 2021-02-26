<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Recipe
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/recipe/{{$recipe->id}}">
                        @csrf
                        @method('patch')
                        <div>
                            Recipe Title: <input type="text" name="name" value="{{ old('name', $recipe->name) }}"/>
                            @error('name'){{ $message }}@enderror
                        </div>

                        <div>
                            Ingredient: <input type="text" name="ingredient" value="{{ old('ingredient', $recipe->ingredient) }}"/>
                            @error('ingredient'){{ $message }}@enderror
                        </div>

                        <div>
                            Amount: <input type="text" name="amount" value="{{ old('amount', $recipe->amount) }}"/>
                            @error('amount'){{ $message }}@enderror
                        </div>

                        <div>
                            Recipe Description/Steps:
                            <textarea name="description">{{ old('description', $recipe->description) }}</textarea>
                            @error('description'){{ $message }}@enderror
                        </div>

                        <button type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
