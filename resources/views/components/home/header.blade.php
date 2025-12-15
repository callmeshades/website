@props([
    'image',
    'name'
])
<section {{ $attributes->merge(['class' => 'w-full bg-gray-900 py-10']) }}>
    <x-container class="flex items-center justify-center md:justify-start">
        <div class="flex flex-col md:flex-row gap-y-3 text-center md:text-left md:text-auto items-center gap-x-6 group">
            <x-home.avatar
                :image="$image"
                :name="$name"
                class="shrink-0"
                width="w-34"
                height="h-34"
            />
            <div class="flex flex-col gap-y-2">
                <h1 class="text-white group-hover:text-red-500 font-bold text-2xl lg:text-3xl transition-all duration-200">{{ $name }}</h1>
                <p class="text-white/70 text-base lg:text-lg">{{ $slot }}</p>
                <div class="mt-2 flex items-center justify-center md:justify-start gap-4">
                    <a href="https://github.com/callmeshades" target="_blank" class="text-white hover:opacity-60 transition-all duration-100">
                        <x-simpleicon-github class="w-5 h-5" />
                    </a>
                    <a href="https://www.linkedin.com/in/brandon-nilsson/" target="_blank" class="text-white hover:opacity-60 transition-all duration-100">
                        <x-simpleicon-linkedin class="w-5 h-5" />
                    </a>
                    <a href="mailto:brandon@smarketize.net" target="_blank" class="text-white hover:opacity-60 transition-all duration-100">
                        <x-lucide-mail class="w-6 h-6" />
                    </a>
                </div>
            </div>
        </div>
    </x-container>
</section>
