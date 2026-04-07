@props([
    'name'
])
<div {{ $attributes->merge(['class' => "relative group inline-flex"]) }}>
    <div class="z-10 inset-y-0 inset-x-0 rounded group-hover:scale-102 group-hover:-rotate-2 transition-all duration-200 bg-gray-800 text-white font-semibold px-3 py-1.5">{{ $name }}</div>
    <div class="absolute z-1 inset-x-0 inset-y-0 bg-red-500 rounded translate-y-0.5 translate-x-0.5 group-hover:translate-y-1 group-hover:translate-x-1 transition-all duration-200"></div>
</div>
