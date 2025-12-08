@props([
    'href' => '#'
])

<a {{ $attributes->merge(['class' => 'py-3 px-4 text-white font-semibold hover:bg-gray-700 hover:text-red-500 transition-all duration-200 ease-in-out', 'href' => $href]) }}>
    {{ $slot }}
</a>
