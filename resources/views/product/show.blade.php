<x-guest-layout>

    <div class="py-12 max-w-6xl mx-auto">
        <a href="{{ url()->previous() }}" class="text-sm text-gray-400">
            Back
        </a>
        <div class="p-6 bg-white shadow-lg rounded-lg my-20">
            <h2 class="text-gray-800 text-3xl font-semibold">{{$product->name}}</h2>
            <p>
                <b>Модель: </b><span class="mt-2 text-gray-600">{{$product->model}}</span>
            </p>
            <p>
                <b>Розмір екрану: </b><span class="mt-2 text-gray-600">{{$product->display_size}}</span>
            </p>
            <p>
                <b>Категорія: </b><span class="mt-2 text-gray-600">{{$product->category->title}}</span>
            </p>
            <p class="text-xl text-gray-500">{{$product->price}} UAH</p>
        </div>
    </div>
</x-guest-layout>
