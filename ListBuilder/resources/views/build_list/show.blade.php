<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $catalog->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <form method="post" action="/item">
                            @csrf
                            <input type="hidden" name="catalog_id" value="{{ $catalog->id }}">
                            Add Item:<input name="name">
                            <button type="submit">Save Item</button>
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
                    List Items:
                    @foreach($catalog->items as $item)
                        <div>{{ $item->name }}
                            <form method="post" action="/item/{{ $item->id }}">
                                @csrf
                                @method('patch')
                                <input name="name" type="text" value="{{ $item->name }}">
                                <button type="submit">Update</button>
                            </form>
                            <form method="post" action="/item/{{ $item->id }}">
                                @csrf
                                @method('delete')
                                <button>Delete - {{ $item->name }}</button>
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
                    <a href="/catalog">Click here when done</a>
                    <ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
