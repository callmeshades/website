<x-layouts.main class="pt-20">
    <x-home.header
        name="Brandon Nilsson"
        :image="Vite::asset('resources/images/brandon.jpg')"
        location="Grande Prairie, Alberta, Canada"
    >
        A full-stack developer based in Grande Prairie, Alberta, Canada. I specialize in building web applications with Laravel and Django. Currently, I'm employed as a software developer and community manager at OG Technologies.
    </x-home.header>

    <x-container>
        <x-divider class="pb-10" />

        <x-home.projects-title
            title="All Projects"
            :count="$projects_count"
        />

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 py-6 gap-3">
            @foreach ($projects as $project)
                <x-home.project-card
                    :title="$project->title"
                    :description="$project->description"
                    :tags="[]"
                    :image="$project->featured_image"
                    :href="route('projects.show', $project)"
                />
            @endforeach
        </section>
    </x-container>
</x-layouts.main>
