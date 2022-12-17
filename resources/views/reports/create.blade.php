<x-guest-layout>
    <div class="max-w-6xl p-6 flex items-center justify-center p-12 mx-auto">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{route('reports.store')}}" method="POST">
                @csrf
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label
                                for="reportName"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                               Report Title
                            </label>
                            <input
                                type="text"
                                name="title"
                                id="reportName"
                                placeholder="To do smth"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>
                    </div>
                </div>

                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label
                                for="body"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Description
                            </label>
                            <textarea
                                name="body"
                                id="body"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            ></textarea>
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
