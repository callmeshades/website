@props([
    'name',
    'hex_color'
])
<div style="background-color: {{ $hex_color }}" class="text-sm text-white px-3 py-0.5 rounded-full">
    {{ $name }}
</div>
