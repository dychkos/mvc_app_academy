<x-guest-layout>
    <div class="max-w-6xl p-6 flex items-center justify-center p-12 mx-auto">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label
                                for="productName"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                               Product Name
                            </label>
                            <input
                                type="text"
                                name="name"
                                id="productName"
                                placeholder="Iphone"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>
                        <div class="mb-5">
                            <label
                                for="price"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Price
                            </label>
                            <input
                                type="number"
                                name="price"
                                id="price"
                                placeholder="1500"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <label
                            for="countries"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Category
                        </label>
                        <select id="countries" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label
                                for="modelName"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Model Name
                            </label>
                            <input
                                type="text"
                                name="model"
                                id="modelName"
                                placeholder="Phone model"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label
                                for="display_size"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Display Size
                            </label>
                            <input
                                type="text"
                                name="display_size"
                                id="display_size"
                                placeholder="1280x720"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>
                    </div>
                </div>
                <div>
                    <button
                        class="-mx-3 focus:bg-indigo-100 rounded-md mt-1 bg-red-600 text-white outline-none p-2"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
