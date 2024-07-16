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
    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-gray-900 border-b border-gray-700 text-sm py-2.5 sm:py-4 dark:bg-neutral-950 dark:border-neutral-700">
        <nav class="flex items-center w-full px-4 mx-auto max-w-7xl basis-full sm:px-6 lg:px-8" aria-label="Global">
            <div class="flex-shrink-0">
                <img class="h-13 w-14" src="{{ asset('storage/images/logojbr.png') }}" alt="Your Company">
              </div>
            <div class="ml-5 me-5 md:me-8">
                <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">Dinas Pariwisata
                    Dan Kebudayaan Jawa Barat</a>
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
                <div data-hs-scrollspy-group class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0 hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover]">
                    <button type="button" id="hs-dropdown-default" class="flex items-center text-sm leading-6 text-gray-700 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500">
                        Informasi
                        <svg class="flex-shrink-0 text-gray-500 ms-2 size-4 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </button>

                    <div class="hs-dropdown-menu hidden z-10 bg-white transition-opacity duration-300 opacity-0 hs-dropdown-open:transition-none hs-dropdown-open:duration-0 sm:hs-dropdown-open:transition-[opacity,margin] sm:hs-dropdown-open:duration-[150ms] sm:transition-[opacity,margin] sm:duration-[150ms] hs-dropdown-open:opacity-100 sm:w-48 sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute top-full sm:border before:-top-5 before:start-0 before:w-full before:h-5">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500" href="#one">
                          Visi & Misi
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500" href="#two">
                          Kuliner
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-700 leading-6 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500 hs-scrollspy-active:text-blue-600 dark:hs-scrollspy-active:text-blue-500" href="#three">
                          Hotel
                        </a>
                      </div>
                </div>
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-neutral-400 dark:hover:text-neutral-500"
                        href="{{ route('publik.publik-posts') }}">Posts</a>
                </div>
                <div class="snap-center shrink-0 pe-5 sm:pe-8 sm:last:pe-0">
                    <a class="inline-flex items-center gap-x-2 hover:text-gray-500 dark:text-white dark:hover:text-neutral-500"
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

<div class="max-w-7xl min-h-[75rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <!-- Grid -->
    <div class="grid gap-5 mb-2 lg:grid-cols-3 lg:gap-y-16">
        <!-- Card -->
        {{-- foreach --}}
      @foreach ($wisatas as $wisata => $row )
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
</div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
</body>

</html>
