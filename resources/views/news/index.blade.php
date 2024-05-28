<x-layout>
  <div class="flex flex-wrap justify-center py-12">
    @foreach ($news as $article)
    <a href="/news/{{ $article->id }}" class="block max-w-sm p-6 bg-black border border-white-500 rounded-lg shadow m-4 expand">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-500 text-center">{{ $article->title }}</h5>
      <p class="font-normal text-white-900 text-center">{{ $article->description }}</p>
    </a>
    @endforeach
  </div>
  <div class="flex justify-center">
    <div class="container">
      {{ $news->links() }}
    </div>
  </div>
</x-layout>