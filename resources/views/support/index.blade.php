<x-layout>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 space-y-4">
        <div class="support-portal-list grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 pb-8">
            <a href="https://www.reddit.com/r/Astroneer/" class="support-link bg-cover bg-center rounded-lg overflow-hidden shadow-md relative h-72 flex align-center justify-between flex-wrap">
                <div class="m-4 z-10">
                    <h2 class="text-3xl font-semibold mb-40 ">CHECK OUR SUBREDDIT</h2>
                    <p class="text-white-700"></p>
                </div>
                <img src="{{ Vite::asset('resources/images/support-t1.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover rounded-lg z-0 opacity-50">
            </a>
            <a href="https://www.reddit.com/r/Astroneer/" class="support-link bg-cover bg-center rounded-lg overflow-hidden shadow-md relative h-72 flex align-center justify-between flex-wrap">
                <div class="m-4 z-10">
                    <h2 class="text-3xl font-semibold mb-40 ">WIKI</h2>
                    <p class="text-white-700"></p>
                </div>
                <img src="{{ Vite::asset('resources/images/support-t2.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover rounded-lg z-0 opacity-50">
            </a>
            <a href="https://www.reddit.com/r/Astroneer/" class="support-link bg-cover bg-center rounded-lg overflow-hidden shadow-md relative h-72 flex align-center justify-between flex-wrap">
                <div class="m-4 z-10">
                    <h2 class="text-3xl font-semibold mb-40 ">JOIN OUR DISSCORD</h2>
                    <p class="text-white-700"></p>
                </div>
                <img src="{{ Vite::asset('resources/images/support-t3.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover rounded-lg z-0 opacity-50">
            </a>
            <a href="https://www.reddit.com/r/Astroneer/" class="support-link bg-cover bg-center rounded-lg overflow-hidden shadow-md relative h-72 flex align-center justify-between flex-wrap">
                <div class="m-4 z-10">
                    <h2 class="text-3xl font-semibold mb-40 ">EMAIL US</h2>
                    <p class="text-white-700"></p>
                </div>
                <img src="{{ Vite::asset('resources/images/support-t4.jpg') }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover rounded-lg z-0 opacity-50">
            </a>
        </div>

        @foreach ($support_questions as $question)
            <div class="space-y-4">
                <a href="/support/{{ $question->id }}" class="block px-4 py-6 border border-gray-400 rounded-lg">
                    <div class="font-bold text-red-500 text-sm">
                        {{ $question->owner }}
                    </div>
                    <div>
                        <strong class="text-laracasts">Q: {{ $question->title }}</strong>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-layout>