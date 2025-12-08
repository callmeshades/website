<div class="fixed z-50 top-5 inset-x-0">
    <div class="container px-4 sm:px-6 lg:px-8 mx-auto">
        <header class="relative flex items-center justify-between bg-gray-800 shadow-lg">
            {{-- Left Side --}}
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="inline-block px-4 py-3 hover:bg-gray-700 transition-all duration-200 ease-in-out group font-semibold text-white hover:text-red-500">
                    <svg class="flex-no-shrink fill-current w-6 h-6" viewBox="0 0 711 618" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                        <g transform="matrix(1,0,0,1,-184.808451,-231.063981)">
                            <g transform="matrix(1.781078,0,0,1.781078,-283.77796,-421.782076)">
                                <g transform="matrix(9.759199,0,0,9.759199,-3728.978925,-4360.613482)">
                                    <g transform="matrix(50,0,0,50,437.792509,519.926662)">
                                    </g>
                                    <text x="405.883px" y="519.927px" style="font-family:'Roboto-Bold', 'Roboto';font-weight:700;font-size:50px;">B</text>
                                </g>
                                <g transform="matrix(1.458647,0,0,1,-14.821801,5.887615)">
                                    <path d="M415.127,360.658L463.967,360.658L463.967,707.567L414.963,707.567L321.135,483.055L352.616,404.435L415.127,589.389L415.127,360.658Z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <nav class="items-center hidden md:flex">
                    {{-- Links Dropdown --}}
                    <x-nav-dropdown
                        title="Links"
                        class="min-w-[150px]"
                    >
                        <x-nav-link href="https://www.youtube.com/@brandonnilsson1358" target="_blank" class="inline-block w-full">
                            <div class="flex items-center gap-x-2">
                                <x-simpleicon-youtube class="w-4 h-4" />
                                <span>YouTube</span>
                            </div>
                        </x-nav-link>
                        <x-nav-link href="https://github.com/callmeshades" target="_blank" class="inline-block w-full">
                            <div class="flex items-center gap-x-2">
                                <x-simpleicon-github class="w-4 h-4" />
                                <span>GitHub</span>
                            </div>
                        </x-nav-link>
                        <x-nav-link href="https://www.linkedin.com/in/brandon-nilsson/" target="_blank" class="inline-block w-full">
                            <div class="flex items-center gap-x-2">
                                <x-simpleicon-linkedin class="w-4 h-4" />
                                <span>LinkedIn</span>
                            </div>
                        </x-nav-link>
                        <x-nav-link href="mailto:brandon@smarketize.net" class="inline-block w-full">
                            <div class="flex items-center gap-x-2">
                                <x-lucide-mail class="w-5 h-5" />
                                <span>Email</span>
                            </div>
                        </x-nav-link>
                    </x-nav-dropdown>
                    <x-nav-link link="#">
                        Blog
                    </x-nav-link>
                    <x-nav-link link="#">
                        About
                    </x-nav-link>
                </nav>
            </div>

            {{-- Right Side --}}
            <div>
                <x-nav-mobile/>
            </div>
        </header>
    </div>
</div>
