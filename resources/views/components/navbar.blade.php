<nav x-data="{ isOpen: false }"
    class="mx-auto flex max-w-full h-full items-center justify-between p-6 lg:px-8 bg-[#1f2936]" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                alt="" />
        </a>
    </div>
    <div class="flex lg:hidden">
        <button type="button" @click="isOpen = !isOpen"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-300">
            <span class="sr-only">Open main menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#"
            class="{{ request()->is('loginpage') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700'}} text-sm/6 rounded-lg px-3 py-2 font-semibold">Log
            in <span aria-hidden="true">&rarr;</span></a>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div x-show="isOpen" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="" />
                </a>
                <button @click="isOpen = !isOpen" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-300">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-300 hover:bg-gray-700">Home</a>
                        <a href="/about"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-300 hover:bg-gray-700">About</a>
                        <a href="/blog"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-300 hover:bg-gray-700">Blog</a>
                        <a href="/contact"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-300 hover:bg-gray-700">Contact</a>
                    </div>
                    <div class="py-6">
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-300 hover:bg-gray-700">Log
                            in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>