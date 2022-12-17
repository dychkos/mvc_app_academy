<x-guest-layout>
    <div class="max-w-6xl p-6 flex items-center justify-center p-12 mx-auto">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{route('lessons.store')}}" method="POST">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label
                                for="lesson"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                               Lesson Name
                            </label>
                            <input
                                type="text"
                                name="title"
                                id="lesson"
                                placeholder="Назва заннятя"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <label
                            for="countries"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            День тижня
                        </label>
                        <select id="days" name="day_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Виберіть день: </option>
                            @foreach($days as $day)
                                <option value="{{$day->id}}">{{$day->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <button
                        class="-mx-3 focus:bg-indigo-100 rounded-md mt-1 bg-red-600 text-white outline-none p-2"
                    >
                        Додати до розкладу
                    </button>
                </div>
                @if(Session::has('message_error'))
                    <p class="text-red-600 text-sm">{{Session::get('message_error')}} </p>
                @endif
            </form>
        </div>
    </div>
</x-guest-layout>
