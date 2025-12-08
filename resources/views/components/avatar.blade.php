@props([
    'width' => 'w-28',
    'height' => 'h-28',
    'image',
    'name'
])
<div {{ $attributes->merge(['class' => "relative $width $height"]) }}>
    <img src="{{ $image }}" alt="Photo of {{ $name }}" class="absolute z-10 inset-y-0 inset-x-0 rounded group-hover:scale-102 group-hover:-rotate-2 transition-all duration-200" draggable="false">
    <div class="absolute z-1 inset-x-0 inset-y-0 bg-red-500 rounded translate-y-0.5 translate-x-0.5 group-hover:translate-y-1 group-hover:translate-x-1 transition-all duration-200"></div>
    <div class="absolute z-[11] inset-x-0 inset-y-0 bg-transparent border-2 border-white rounded -translate-y-1 -translate-x-1 group-hover:-translate-y-2 group-hover:-translate-x-2 transition-all duration-200"></div>
</div>
