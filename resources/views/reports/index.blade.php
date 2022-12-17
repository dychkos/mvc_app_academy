<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-32">
                    <div class="px-4 sm:px-8 max-w-5xl m-auto">
                        <h1 class="text-center font-semibold text-sm">Report list</h1>
                        <a href="{{route('reports.create')}}" class="text-lg text-center text-indigo-600">+ Add report</a>
                        <div class="mt-2 text-center mb-4 ">
                            <p class="text-xs text-gray-500">Sort by</p>
                            @php
                                $hasSort = boolval(Request::get('sort'));
                            @endphp
                            <a href="{{route('reports.index')}}" class="text-sm {{$hasSort ? '' : 'underline'}}">Date</a>
                            <a href="{{route('reports.index', ['sort' => 'price'])}}" class="text-sm {{$hasSort ? 'underline' : ''}}"">Price</a>
                        </div>
                        <ul class="border border-gray-200 rounded overflow-hidden shadow-md">
                            @foreach($reports as $report)
                                <li class="px-4 py-2 flex justify-between bg-white hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">
                                    <div>
                                        <p>
                                            <a href="{{route('reports.show', $report->id)}}">
                                                {{$report->title}}
                                            </a>
                                        </p>
                                    </div>
                                    <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="text-sm text-red-600">Delete </button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                        <a href="mailto:jefte_caro@yahoo.com" class="text-xs text-center block mt-4 hover:underline">@Serhii Dychko 401</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
