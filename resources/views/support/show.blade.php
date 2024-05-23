<x-layout>
    <h2 class="font-bold text-lg">{{ $question->title }}</h2>
    <p class="mt-4 mb-4">
        This job pays {{ $question->owner }} per year.
    </p>
    <p>
        <a href="/support"><button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Back</button></a>
    </p>
</x-layout>