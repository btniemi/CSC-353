<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Your Recipe
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/recipe">
                        @csrf
                        <div>
                            Recipe Title: <input type="text" name="name" value="{{ old('name') }}"/>
                            @error('name'){{ $message }}@enderror
                        </div>

                        <div>
                            Ingredient: <input type="text" name="ingredient" value="{{ old('ingredient') }}"/>
                            @error('ingredient'){{ $message }}@enderror
                        </div>

                        <div>
                            Amount: <input type="text" name="amount" value="{{ old('amount') }}"/>
                            @error('amount'){{ $message }}@enderror
                        </div>

                        <div>
                            Recipe Description/Steps:
                            <textarea name="description">{{ old('description') }}</textarea>
                            @error('description'){{ $message }}@enderror
                        </div>

                        <button>Save Recipe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
