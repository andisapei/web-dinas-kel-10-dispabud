<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Detail Wisata
        </h2>
    </x-slot>

   <!-- Content -->
<div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:ps-72">
    <div class="flex gap-x-2">
        <a href="{{ route('wisatas.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            back
        </a>
        <a class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-orange-400 border border-transparent rounded-lg gap-x-2 hover:bg-orange-500 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('wisatas.edit', $wisata)}}">
            Edit
        </a>
        <form onsubmit="return confirm('Are you sure')" method="post" action="{{ route('wisatas.destroy', $wisata) }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
            Delet
        </button>
        </form>
    </div>
   <!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 pb-12 mx-auto lg:pt-1 sm:px-6 lg:px-8">
    <div class="max-w-2xl">
      <!-- Content -->
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl dark:text-white">{{ $wisata->nama_wisata }}</h2>
        </div>
      <div class="space-y-5 md:space-y-8">
        <figure>
          <img class="object-cover w-full rounded-xl" src="{{ asset('storage/images/'.$wisata->image) }}" alt="Image Description">
          <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
            tanggal post : {{ $wisata->created_at }}
          </figcaption>
        </figure>

        <p class="text-lg text-gray-800 dark:text-neutral-200">{{ $wisata->deskripsi }}</p>

        <span class="py-1 px-1.5 flex items-center gap-x-2 text-lg font-medium dark:text-neutral-200">
            <svg class=" dark:text-neutral-200 size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            Alamat : {{ $wisata->lokasi }}
        </span>
        <span class="py-1 px-1.5 flex items-center gap-x-2 text-lg font-medium dark:text-neutral-200">
            <svg class=" dark:text-neutral-200 size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            Kontak : {{ $wisata->kontak }}
        </span>
        <span class="py-1 px-1.5 flex items-center gap-x-2 text-lg font-medium dark:text-neutral-200">
            <svg class=" dark:text-neutral-200 size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            Fasilitas : {{ $wisata->fasilitas }}
        </span>
        <span class="py-1 px-1.5 flex items-center gap-x-2 text-lg font-medium dark:text-neutral-200">
            <svg class=" dark:text-neutral-200 size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            Harga Tiket : Rp. {{ $wisata->harga_tiket }}
        </span>
        <span class="py-1 px-1.5 flex items-center gap-x-2 text-lg font-medium dark:text-neutral-200">
            <svg class=" dark:text-neutral-200 size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            Jam Operasional : {{ $wisata->jam_operasional }}
        </span>

      </div>

      <!-- End Content -->
    </div>
  </div>
  <!-- End Blog Article -->
  </div>
  <!-- End Content -->
</x-app-layout>
