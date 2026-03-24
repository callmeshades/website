@props([
    'title',
    'description',
    'image',
    'tags' => [],
    'href' => '#'
])
<a href="{{ $href }}" class="relative block group">
    <div class="z-[1] relative flex flex-col justify-between bg-gray-800 h-full rounded-lg overflow-hidden duration-200 group-hover:-translate-y-1 group-hover:-translate-x-1">
        <div>
            <div class="relative h-32">
                <img src="{{ Vite::asset('resources/images/projects/' . $image) }}" alt="Featured image for {{ $title }}" class="w-full h-full object-cover object-center">
            </div>
            <div class="px-3 pt-3 pb-4">
                <h4 class="text-xl font-bold text-gray-100 mb-3 line-clamp-1">{{ $title }}</h4>
                <p class="text-gray-300 line-clamp-3">
                    {{ $description }}
                </p>
            </div>
        </div>
        <div class="px-3 pb-4 flex flex-wrap items-center gap-3 flex-wrap">
            @foreach($tags as $tag)
                <x-project-tag :name="$tag['name']" :hex_color="$tag['hex']" />
            @endforeach
        </div>
    </div>

    <div class="z-0 absolute inset-0 bg-red-500 rounded-xl"></div>
</a>
