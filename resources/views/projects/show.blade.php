<x-layouts.main class="pt-30">
    <x-container>
        <div class="mb-8">
            <h1 class="text-white font-bold text-3xl lg:text-4xl">{{ $project['matter']['title'] }}</h1>
        </div>

        {{-- Slider --}}
        <section class="splide mb-8" aria-label="Slider for my projects">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach($project['matter']['images'] as $image)
                        <li class="splide__slide">
                            <img src="{{ Vite::asset('resources/images/projects/'.$image) }}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        {{-- Technologies --}}
        <section class="mb-8">
            <h2 class="text-white font-bold text-2xl lg:text-3xl mb-4">Technologies</h2>
            <div class="flex flex-wrap gap-4">
                @foreach($project['matter']['technologies'] as $technology)
                    <x-projects.technology :name="$technology" />
                @endforeach
            </div>
        </section>

        <section class="mb-10">
            <h2 class="text-white font-bold text-2xl lg:text-3xl mb-4">Description</h2>
            <p class="text-white text-base lg:text-lg">{{ $project['matter']['description'] }}</p>
        </section>
    </x-container>
</x-layouts.main>
