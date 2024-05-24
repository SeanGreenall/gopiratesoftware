<x-layout>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 space-y-4">
        <h1 class="text-3xl font-thin pb-5">GOT A QUESTION? NEED SOME ANSWERS?</h1>
        <div class="container mx-auto pb-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 ">
                <div class=" overflow-hidden shadow-md h-60 expand opacity-75 hover:opacity-100">
                    <a href="https://discord.gg/piratesoftware" class="relative">
                        <h2 class="text-3xl font-bold">JOIN OUR DISCORD</h2>
                        <img src="{{ Vite::asset('resources/images/support-t4.jpg') }}" alt="An image of the Champions of Breakfast logo" class="w-full h-max object-cover absolute">
                    </a>
                </div>
                <div class=" overflow-hidden shadow-md h-60 expand opacity-75 hover:opacity-100">
                    <a href="https://www.reddit.com/r/Heartbound/?rdt=43406" class="relative">
                        <h2 class="text-3xl font-bold">CHECK OUR SUBREDDIT</h2>
                        <img src="{{ Vite::asset('resources/images/support-t2.jpg') }}" alt="An image of the Champions of Breakfast logo" class="w-full h-max object-cover absolute">
                    </a>
                </div>
                <div class=" overflow-hidden shadow-md h-60 expand opacity-75 hover:opacity-100">
                    <a href="/games/championsofbreakfast" class="relative">
                        <h2 class="text-3xl font-bold">EMAIL US</h2>
                        <img src="{{ Vite::asset('resources/images/support-t3.jpg') }}" alt="An image of the Champions of Breakfast logo" class="w-full h-max object-center absolute">
                    </a>
                </div>
                <div class=" overflow-hidden shadow-md h-60 expand opacity-75 hover:opacity-100">
                    <a href="/games/championsofbreakfast" class="relative">
                        <h2 class="text-3xl font-bold">WIKI</h2>
                        <img src="{{ Vite::asset('resources/images/support-t1.jpg') }}" alt="An image of the Champions of Breakfast logo" class="w-full h-max object-cover absolute">
                    </a>
                </div>

            </div>
        </div>
        
        @foreach ($support_questions as $question)
            <div class="expand">
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