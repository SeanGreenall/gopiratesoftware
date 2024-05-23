<x-layout>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        @foreach ($support_questions as $question)
            <div class="space-y-4">
                <a href="/support/{{ $question['id'] }}" class="block px-4 py-6 border border-gray-400 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $question['owner'] }}
                    </div>
                    <div>
                        <strong class="text-laracasts">{{ $question['title'] }}:</strong>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-layout>