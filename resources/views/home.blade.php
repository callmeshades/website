<x-layouts.main class="pt-20">
    <x-home.header
        name="Brandon Nilsson"
        description="I live building things and teaching"
        :image="Vite::asset('resources/images/brandon.jpg')"
        location="Grande Prairie, Alberta, Canada"
    />

{{--    <x-container>--}}
{{--        <x-home.projects-title--}}
{{--            title="All Projects"--}}
{{--            count="10"--}}
{{--        />--}}

{{--        <section class="py-6">--}}
{{--            <x-home.project-card--}}
{{--                title="OrderMerch"--}}
{{--                description="OrderMerch is a service I created and run by myself. The backend is created with Django and DRF. The front end uses Next.js and the app front end uses Sveltekit. The reason for separating the two is because Sveltekit works better with Fabricjs which I started using for the designer. The service is mostly automated once a client is set up and integrated with the API. Merchandise is sent to and fulfilled by suppliers via rest APIs. I can provide snippets for the codebase upon request."--}}
{{--                :tags="[]"--}}
{{--                :image="Vite::asset('resources/images/brandon.jpg')"--}}
{{--            />--}}
{{--        </section>--}}
{{--    </x-container>--}}
</x-layouts.main>
