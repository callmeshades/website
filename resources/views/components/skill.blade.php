@props([
    'icon'
])
<div class="flex items-center gap-2">
    {{ $icon }}
    <p class="text-white font-semibold text-sm">{{ $slot }}</p>
</div>
