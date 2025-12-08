@props([
    'title'
])
<div
    class="relative group"
    x-data="{ open: false }"
    @mouseenter="open = true"
    @mouseleave="open = false"
>
    <button class="flex items-center gap-x-2 py-3 px-4 text-white font-semibold group-hover:bg-gray-700 group-hover:text-red-500 transition-all duration-200 ease-in-out cursor-pointer">
        {{ $title }}
        <div class="transition-all duration-200" :class="{ 'rotate-180': open }">
            <x-lucide-chevron-down class="w-3 h-3" />
        </div>
    </button>

    <div
        x-show="open"
        x-transition
        x-cloak
        {{ $attributes->merge(['class' => 'absolute bg-gray-800']) }}
    >
        {{ $slot }}
    </div>
</div>
