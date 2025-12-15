<div
    x-data="{
        open: false,
        toggle() {
            this.open = !this.open;
            // Prevent the body from being scrollable while in the overlay
            if (this.open) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        }
    }"
>
    <button class="block md:hidden py-4 px-4 cursor-pointer text-white hover:bg-gray-700 hover:text-red-500" @click="toggle()">
        <x-lucide-menu class="w-4 h-4" />
    </button>
    <div
        class="absolute z-[2] top-15 h-[400px] max-h-[400px] inset-0 bg-gray-800 overflow-y-auto"
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90 -translate-y-10"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-90 -translate-y-10"
    >
        <div class="relative w-full">
            <x-nav-link :href="route('resume')" class="w-full inline-block">
                Resume
            </x-nav-link>
        </div>
    </div>

    {{-- Overlay to hide the dropdown --}}
    <div class="fixed -z-[1] bg-transparent inset-0" x-show="open" @click="toggle()"></div>
</div>
