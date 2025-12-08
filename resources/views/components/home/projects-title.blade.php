@props([
    'title',
    'count'
])
<div class="flex items-center justify-between">
    <h2 class="text-xl lg:text-2xl font-bold text-white">{{ $title }}</h2>
    <span class="bg-red-500 text-white rounded-xl px-4 text-sm font-semibold py-1">{{ $count }} Projects</span>
</div>
