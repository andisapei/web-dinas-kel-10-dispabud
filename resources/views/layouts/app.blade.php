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
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.sidebar')

            <!-- Page Heading -->
            @isset($header)
                <header  class="sticky z-50 -mt-px bg-white shadow -top-px dark:bg-gray-800" {{-- class="bg-white shadow dark:bg-gray-800" --}}>
                    <div class="max-w-2xl px-4 py-6 mx-auto sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{-- Alert --}}
                @if (session('success'))
                <div class="p-4 mt-2 text-sm text-center text-white bg-blue-600 rounded-lg dark:bg-blue-500" role="alert" style="width: 50%; margin-left: 35%;">
                    <span class="font-bold">Success</span>{{ session('success') }}
                </div>
                @endif

                {{-- Alert end --}}
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
