@props([
    'title',
    'description',
    'image',
    'tags' => [],
    'href' => '#'
])
<a href="{{ $href }}" class="relative w-full h-full group">
    <div class="z-[1] relative block w-full h-full bg-gray-800 rounded-lg overflow-hidden duration-200 group-hover:-translate-y-1 group-hover:-translate-x-1">
        <div class="relative h-48">
            @if(App::isProduction())
                <img src="{{ $image }}" alt="Featured image for {{ $title }}" class="w-full object-cover object-center">
            @else
                <img src="{{ $image }}" alt="Featured image for {{ $title }}" class="w-full object-cover object-center">
            @endif
        </div>
        <div class="px-3 pb-4">
            <h4 class="text-xl font-bold text-gray-100 mb-3">{{ $title }}</h4>
            <p class="text-gray-300 line-clamp-4">
                {{ $description }}
            </p>
        </div>
        <div class="pb-3 pb-4 flex flex-wrap items-center gap-3">
            @foreach($tags as $tag)
                
            @endforeach
        </div>
    </div>

    <div class="z-0 absolute inset-0 bg-red-500 rounded-xl"></div>
</a>
