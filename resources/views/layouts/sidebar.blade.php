<!-- ========== MAIN CONTENT ========== -->
<!-- Breadcrumb -->
<div
    class="sticky inset-x-0 top-0 z-20 px-4 bg-white border-y sm:px-6 md:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex items-center justify-between py-2">
        <!-- Breadcrumb -->
        <ol class="flex items-center ms-3 whitespace-nowrap">
            <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
                {{-- Application Layout --}}
                <svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500"
                    width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </li>
            <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
                Dashboard
            </li>
        </ol>
        <!-- End Breadcrumb -->

        <!-- Sidebar -->
        <button type="button"
            class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-200"
            data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13" />
            </svg>
            <span class="sr-only">Sidebar</span>
        </button>
        <!-- End Sidebar -->
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Sidebar -->
<div id="application-sidebar"
    class="hs-overlay [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-[260px]
    hidden
    fixed inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
    dark:bg-neutral-800 dark:border-neutral-700
   ">
    <div class="px-8">
        <!-- Logo -->
        <a class="flex-none inline-block mt-5 text-xl font-semibold rounded-xl focus:outline-none focus:opacity-80 dark:text-white"
            href="../templates/admin/index.html" aria-label="Preline">
            <div class="flex">
                <img class="h-13 w-14" src="{{ asset('storage/images/logojbr.png') }}" alt="Your Company">
                <div class="ml-5 me-5 md:me-8">
                    <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">
                        DISPRABUD ADMIN
                    </a>
                </div>
            </div>
        </a>
        <!-- End Logo -->
    </div>

    <nav class="flex flex-col flex-wrap w-full p-6 hs-accordion-group" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
            <li>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{-- <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                    href="#"> --}}
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    Dashboard
                </x-nav-link>
                {{-- </a> --}}
            </li>

            <li>
                <x-nav-link :href="route('users.index')" :active="request()->routeIs('users.index', 'users.show', 'users.create')">
                    {{-- <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                    href="#"> --}}
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    User
                </x-nav-link>
                {{-- </a> --}}
            </li>

            <li>
                <x-nav-link :href="route('posts.index')"  :active="request()->routeIs('posts.index','posts.create','posts.edit','posts.show')">
                    {{-- <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                    href="#"> --}}
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    Posts
                </x-nav-link>
                {{-- </a> --}}
            </li>
            <li>
                <x-nav-link :href="route('wisatas.index')" :active="request()->routeIs('wisatas.index','wisatas.create','wisatas.show','wisatas.edit')">
                    {{-- <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                    href="#"> --}}
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    Wisata
                </x-nav-link>
                {{-- </a> --}}
            </li>
            <li>
                <x-nav-link :active="request()->routeIs('budaya.index')">
                    {{-- <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                    href="#"> --}}
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    Budaya
                </x-nav-link>
                {{-- </a> --}}
            </li>
            <li>
                <x-nav-link :active="request()->routeIs('informasi.index')">
                    {{-- <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white"
                    href="#"> --}}
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    Informasi
                </x-nav-link>
                {{-- </a> --}}
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">

                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                        </svg>

                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            </li>
        </ul>
    </nav>
</div>
<!-- End Sidebar -->

<!-- Content -->
{{-- /// --}}
<!-- End Content -->

<!-- ========== END MAIN CONTENT ========== -->
