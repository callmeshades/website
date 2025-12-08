@props([
    'title',
    'description',
    'image',
    'tags' => [],
    'link' => '#'
])
<a href="{{ $link }}" class="bg-gray-800 rounded-lg overflow-hidden">
    <div class="relative h-48">
        <img src="{{ $image }}" alt="">
    </div>
</a>
