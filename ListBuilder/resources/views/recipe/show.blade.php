<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Recipe
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <div>
                            Recipe Title: {{ $recipe->name }}
                        </div>

                        <div>
                            Ingredient: {{ $recipe->ingredient }}
                        </div>

                        <div>
                            Amount: {{ $recipe->amount }}
                        </div>

                        <div>
                            Recipe Description/Steps: {{ $recipe->description }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
