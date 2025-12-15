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
            count="10"
        />

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 py-6">
            <x-home.project-card
                title="OrderMerch"
                description="OrderMerch is a service I created and run by myself. The backend is created with Django and DRF. The front end uses Next.js and the app front end uses Sveltekit. The reason for separating the two is because Sveltekit works better with Fabricjs which I started using for the designer. The service is mostly automated once a client is set up and integrated with the API. Merchandise is sent to and fulfilled by suppliers via rest APIs. I can provide snippets for the codebase upon request."
                :tags="[]"
                :image="Vite::asset('resources/images/ordermerch.jpg')"
            />
        </section>
    </x-container>
</x-layouts.main>
