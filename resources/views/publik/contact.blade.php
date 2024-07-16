<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <!-- ========== HEADER ========== -->
    <header
        class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-gray-900 border-b border-gray-700 text-sm py-2.5 sm:py-4 dark:bg-neutral-950 dark:border-neutral-700">
        <nav class="flex items-center w-full px-4 mx-auto max-w-7xl basis-full sm:px-6 lg:px-8" aria-label="Global">
            <div class="flex-shrink-0">
                <img class="h-13 w-14" src="{{ asset('storage/images/logojbr.png') }}" alt="Your Company">
            </div>
            <div class="ml-5 me-5 md:me-8">
                <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">Dinas Pariwisata
                    Dan Kebudayaan Jawa Barat
                </a>
            </div>

            <div class="flex items-center justify-end w-full ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
                <div class="sm:hidden">
                    <button type="button"
                        class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full text-white hover:bg-white/20 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </button>
                </div>

                <div class="hidden mx-auto mr-10 sm:block">
                    <label for="icon" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                            <svg class="flex-shrink-0 text-gray-500 size-4 dark:text-neutral-500"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <input type="text" id="icon" name="icon"
                            class="block px-4 py-2 text-sm text-gray-300 bg-transparent border-gray-700 rounded-lg shadow-sm ps-11 pe-20 w-92 md:w-96 focus:z-10 focus:border-gray-900 focus:ring-gray-600 placeholder:text-gray-500 dark:border-neutral-700 dark:text-neutral-500 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Search">
                        <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none end-0 pe-4">
                            <span class="text-gray-500 dark:text-neutral-500">Ctrl + /</span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- Nav -->
        <nav class="sticky z-50 pt-6 -mt-px text-sm font-medium text-black bg-white border-t shadow-sm -top-px ring-1 ring-gray-900 ring-opacity-5 shadow-gray-100 md:pb-6 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70"
            aria-label="Jump links">
            <div
                class="max-w-7xl snap-x w-full flex items-center overflow-x-auto px-4 sm:px-6 lg:px-8 pb-4 md:pb-0 mx-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900">
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last-pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500"
                        href="{{ route('publik.home') }}">Dashboard</a>
                </div>
                <div data-hs-scrollspy-group
                    class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0 hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover]">
                    <button type="button" id="hs-dropdown-default"
                        class="flex items-center text-sm leading-6 text-gray-700 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500">
                        Informasi
                        <svg class="flex-shrink-0 text-gray-500 ms-2 size-4 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>

                    <div
                        class="hs-dropdown-menu hidden z-10 bg-white transition-opacity duration-300 opacity-0 hs-dropdown-open:transition-none hs-dropdown-open:duration-0 sm:hs-dropdown-open:transition-[opacity,margin] sm:hs-dropdown-open:duration-[150ms] sm:transition-[opacity,margin] sm:duration-[150ms] hs-dropdown-open:opacity-100 sm:w-48 sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500"
                            href="#one">
                            Visi & Misi
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500"
                            href="#two">
                            Kuliner
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500"
                            href="#three">
                            Hotel
                        </a>
                    </div>
                </div>
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500"
                        href="{{ route('publik.publik-posts') }}">Posts</a>
                </div>
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500"
                        href="{{ route('publik.publik-wisata') }}">Wisata</a>
                </div>
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500"
                        href="#">Budaya</a>
                </div>
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500"
                        href="#">Galery</a>
                </div>
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-white dark:hover:text-neutral-500"
                        href="{{ route('publik.contact') }}">Contact</a>
                </div>
            </div>
        </nav>
        <!-- End Nav -->

        <div class="max-w-7xl min-h-[40rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <!-- Contact -->
            <div class="max-w-2xl mx-auto mb-6 text-center sm:mb-10">
                <h2 class="text-2xl font-medium text-black sm:text-4xl dark:text-black">
                    Contacts
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:items-center md:gap-8 lg:gap-12">
                <div
                    class="overflow-hidden bg-gray-100 aspect-w-16 aspect-h-6 lg:aspect-h-14 rounded-2xl dark:bg-neutral-900">
                    <img class="object-cover transition-transform duration-500 ease-in-out group-hover:scale-105 rounded-2xl"
                        src="https://images.unsplash.com/photo-1572021335469-31706a17aaef?q=80&w=3540&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Image Description">
                </div>
                <!-- End Col -->

                <div class="space-y-8 lg:space-y-16">
                    <div>
                        <h3 class="mb-5 font-semibold text-black dark:text-gray-700">
                            Our address
                        </h3>

                        <!-- Grid -->
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 md:gap-8 lg:gap-12">
                            <div class="flex gap-4">
                                <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>

                                <div class="grow">
                                    <p class="text-sm text-gray-600 dark:text-gray-600">
                                        United Kingdom
                                    </p>
                                    <address class="mt-1 not-italic text-black dark:text-gray-600">
                                        300 Bath Street, Tay House<br>
                                        Glasgow G2 4JR
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- End Grid -->
                    </div>

                    <div>
                        <h3 class="mb-5 font-semibold text-black dark:text-gray-700">
                            Our contacts
                        </h3>

                        <!-- Grid -->
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 md:gap-8 lg:gap-12">
                            <div class="flex gap-4">
                                <svg class="flex-shrink-0 text-gray-500 size-5 dark:text-gray-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z">
                                    </path>
                                    <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
                                </svg>

                                <div class="grow">
                                    <p class="text-sm text-gray-600 dark:text-gray-600">
                                        Email us
                                    </p>
                                    <p>
                                        <a class="relative inline-block font-medium text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-none focus:before:bg-black dark:text-gray-600 dark:hover:before:bg-white dark:focus:before:bg-white"
                                            href="mailto:example@site.so">
                                            hello@example.so
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <svg class="flex-shrink-0 text-gray-500 size-5 dark:text-gray-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>

                                <div class="grow">
                                    <p class="text-sm text-gray-600 dark:text-gray-600">
                                        Call us
                                    </p>
                                    <p>
                                        <a class="relative inline-block font-medium text-black before:absolute before:bottom-0.5 before:start-0 before:-z-[1] before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-none focus:before:bg-black dark:text-gray-600 dark:hover:before:bg-white dark:focus:before:bg-white"
                                            href="mailto:example@site.so">
                                            +44 222 777-000
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Grid -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Contact -->
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="w-full mt-auto bg-gray-900 dark:bg-neutral-950">
        <div class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">
            <!-- Grid -->
            <div class="flex-shrink-0">
                <img class="h-13 w-14" src="{{ asset('storage/images/logojbr.png') }}" alt="Your Company">
            </div>
            <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-5">
                <div class="flex col-span-full lg:col-span-1">
                    <a class="text-xl font-semibold text-white " href="#" aria-label="Brand">DINAS PARIWISATA
                        DAN KEBUDAYA JAWA BARAT</a>
                </div>
                <!-- End Col -->

                <div class="col-span-1">
                    <h4 class="font-semibold text-gray-100">Product</h4>

                    <div class="grid mt-3 space-y-3">
                        <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200"
                                href="#">Pricing</a></p>
                        <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200"
                                href="#">Changelog</a></p>
                        <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200"
                                href="#">Docs</a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-1">
                    <h4 class="font-semibold text-gray-100">Company</h4>

                    <div class="grid mt-3 space-y-3">
                        <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200"
                                href="#">About us</a></p>
                        <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200"
                                href="#">Blog</a></p>
                        <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200"
                                href="#">Careers</a> <span
                                class="inline px-2 py-1 text-xs text-white bg-blue-700 rounded-lg ms-1">We're
                                hiring</span></p>
                        <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200"
                                href="#">Customers</a></p>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-2">
                    <h4 class="font-semibold text-gray-100">Stay up to date</h4>

                    <form>
                        <div
                            class="flex flex-col items-center gap-2 p-2 mt-4 bg-white rounded-lg sm:flex-row sm:gap-3 dark:bg-neutral-900">
                            <div class="w-full">
                                <label for="hero-input" class="sr-only">Search</label>
                                <input type="text" id="hero-input" name="hero-input"
                                    class="block w-full px-4 py-3 text-sm border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Enter your email">
                            </div>
                            <a class="inline-flex items-center justify-center w-full p-3 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg sm:w-auto whitespace-nowrap gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="#">
                                Subscribe
                            </a>
                        </div>
                        <p class="mt-3 text-sm text-gray-400">
                            New UI kits or big discounts. Never spam.
                        </p>
                    </form>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->

            <div class="grid mt-5 sm:mt-12 gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-400 dark:text-neutral-400">© 2022 Preline. All rights reserved.</p>
                </div>
                <!-- End Col -->

                <!-- Social Brands -->
                <div>
                    <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600"
                        href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600"
                        href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg>
                    </a>
                    <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600"
                        href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600"
                        href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600"
                        href="#">
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                        </svg>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->
</body>

</html>
