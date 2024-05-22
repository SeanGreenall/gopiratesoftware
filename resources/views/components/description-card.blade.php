@props(['title', 'image_source', 'description', 'description_2'])
<div class="flex justify-center container mx-auto py-10">
    <div class="w-[800px] text-center rounded-lg overflow-hidden shadow-md">
        <h2 class="text-3xl font-bold pb-10">{{ $title }}</h2>
        <img src="{{ Vite::asset($image_source) }}" alt="An image of the Heart Bound logo" class="w-full h-max object-cover rounded-lg pb-10">
        <p>{{ $description }}</p>
        <br>
        <p>{{ $description_2 }}</p>
    </div>
</div>