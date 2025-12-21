@props([
    'tag'
])
<div style="background-color: {{ $tag->hex_color }}" class="text-sm text-white px-3 py-0.5 rounded-full">
    {{ $tag->name }}
</div>
