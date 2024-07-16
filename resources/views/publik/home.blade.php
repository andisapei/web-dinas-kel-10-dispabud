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
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-white dark:hover:text-neutral-500"
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
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500"
                        href="{{ route('publik.contact') }}">Contact</a>
                </div>
            </div>
        </nav>
        <!-- End Nav -->

        <div class="max-w-7xl min-h-[40rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <h1 class="mb-2 text-lg">POSTS</h1>
            <hr class="mb-2">
            <!-- Grid -->
            <div class="grid gap-5 mb-2 lg:grid-cols-3 lg:gap-y-16">
                <!-- Card -->
                {{-- foreach --}}
                @foreach ($posts as $post => $row)
                <a class="group" href="{{ route('publik.publik-show-posts', $row->id) }}">
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                      <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out size-full start-0 group-hover:scale-105 rounded-xl" src="{{ asset('storage/images/'.$row->image) }}" alt="Image Description">
                    </div>

                    <div class="mt-7">
                      <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-800 dark:group-hover:text-black">
                        {{ $row->title }}
                      </h3>
                      <p class="mt-3 text-gray-800 dark:text-gray-700">
                       {{ Str::limit($row['isi'],50) }}
                      </p>
                    </div>
                  </a>
                @endforeach
                <!-- End Card -->
            </div>
            <div class="mb-10">
                <a href="{{ route('publik.publik-posts') }}">
                    <p
                        class="inline-flex items-center mt-4 font-medium text-blue-600 gap-x-1 decoration-2 hover:underline">
                        Read more
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
            </div>

            <h1 class="mb-2 text-lg">WISATA</h1>
            <hr class="mb-2">
            <!-- Grid -->
            <div class="grid gap-5 mb-2 lg:grid-cols-3 lg:gap-y-16">
                <!-- Card -->
                {{-- foreach --}}
                @foreach ($wisatas as $wisata => $row)
                <a class="group" href="{{ route('publik.publik-show-wisata', $row->id) }}">
                    <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                      <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out size-full start-0 group-hover:scale-105 rounded-xl" src="{{ asset('storage/images/'.$row->image) }}" alt="Image Description">
                    </div>

                    <div class="mt-7">
                      <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-gray-800 dark:group-hover:text-black">
                        {{ $row->nama_wisata }}
                      </h3>
                      <p class="mt-3 text-gray-800 dark:text-gray-700">
                       {{ Str::limit($row['deskripsi'],50) }}
                      </p>
                    </div>
                  </a>
                @endforeach
                <!-- End Card -->
            </div>
            <div>
                <a href="{{ route('publik.publik-wisata') }}">
                    <p
                        class="inline-flex items-center mt-4 font-medium text-blue-600 gap-x-1 decoration-2 hover:underline">
                        Read more
                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </a>
            </div>
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
          <a class="text-xl font-semibold text-white " href="#" aria-label="Brand">DINAS PARIWISATA DAN KEBUDAYA JAWA BARAT</a>
        </div>
        <!-- End Col -->

        <div class="col-span-1">
          <h4 class="font-semibold text-gray-100">Product</h4>

          <div class="grid mt-3 space-y-3">
            <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Pricing</a></p>
            <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Changelog</a></p>
            <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Docs</a></p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-span-1">
          <h4 class="font-semibold text-gray-100">Company</h4>

          <div class="grid mt-3 space-y-3">
            <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">About us</a></p>
            <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Blog</a></p>
            <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Careers</a> <span class="inline px-2 py-1 text-xs text-white bg-blue-700 rounded-lg ms-1">We're hiring</span></p>
            <p><a class="inline-flex text-gray-400 gap-x-2 hover:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200" href="#">Customers</a></p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-span-2">
          <h4 class="font-semibold text-gray-100">Stay up to date</h4>

          <form>
            <div class="flex flex-col items-center gap-2 p-2 mt-4 bg-white rounded-lg sm:flex-row sm:gap-3 dark:bg-neutral-900">
              <div class="w-full">
                <label for="hero-input" class="sr-only">Search</label>
                <input type="text" id="hero-input" name="hero-input" class="block w-full px-4 py-3 text-sm border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter your email">
              </div>
              <a class="inline-flex items-center justify-center w-full p-3 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg sm:w-auto whitespace-nowrap gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
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
          <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </a>
          <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
            </svg>
          </a>
          <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
          </a>
          <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
          </a>
          <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"/>
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
