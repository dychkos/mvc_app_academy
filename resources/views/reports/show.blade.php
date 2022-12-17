<x-guest-layout>

    <div class="py-12 max-w-6xl mx-auto">
        <a href="{{ url()->previous() }}" class="text-sm text-gray-400">
            Back
        </a>
        <div class="p-6 bg-white shadow-lg rounded-lg my-20">
            <h2 class="text-gray-800 text-3xl font-semibold">{{$report->title}}</h2>

            <p>
                <b>Опис: </b><span class="mt-2 text-gray-600">{{$report->body}}</span>
            </p>
            <p>
                <b>Створено: </b><span class="mt-2 text-gray-600">{{$report->created_at->diffForHumans()}}</span>
            </p>
        </div>
        <div class="mt-4">
            <h2>Comments</h2>
            @foreach($report->comments as $comment)
                <div class="mt-2 p-6 bg-white shadow-lg rounded-lg my-20">
                    <p class="mt-2 text-gray-600">{{$comment->body}}</p>
                    @if(isset($comment->image))
                        <img class="mt-1 rounded-md" src="{{ asset('images/' . $comment->image->src) }}" width="80" height="80" alt="Images">
                    @endif
                </div>
            @endforeach
        </div>
        <form class="mt-6" action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
            <input type="hidden" name="report_id" value="{{$report->id}}">
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label
                            for="body"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Comment
                        </label>
                        <textarea
                            name="body"
                            id="body"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        ></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="inputImage">Select Image:</label>
                    <input
                        type="file"
                        name="image"
                        id="inputImage"
                        class="form-control @error('image') is-invalid @enderror">


                </div>
            </div>
            <div>

                <button
                    class="-mx-3 focus:bg-indigo-100 rounded-md mt-1 bg-red-600 text-white outline-none p-2"
                >
                    Left comment
                </button>
            </div>
            <div>
                @error('image')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
                @error('body')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

        </form>


    </div>
</x-guest-layout>
