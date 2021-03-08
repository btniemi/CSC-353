<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List Builder
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Welcome to ListBuilder. <br>
                    Where you can make, edit, and save lists. <br>
                    You can also save your favorite recipes and we can help you generate a list of groceries you need to make said recipe. <br>
                    Lets make some lists!
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Do you want to create a list or add a new recipe? <br>
                    <a href="/catalog">Click here to Build a List</a>
                    <ul>
                        <a href="/recipe">Click here to Add a Recipe</a>
                        <ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
