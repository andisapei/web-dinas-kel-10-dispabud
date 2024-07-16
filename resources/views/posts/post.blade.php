<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Posts
        </h2>
    </x-slot>

   <!-- Content -->
<div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:ps-72">
    <div class="mb-3">
        <a class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('posts.create')}}">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
        Add Post
        </a>
    </div>
<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-1 lg:py-1 mx-auto">
    <!-- Grid -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

      <!-- Card -->
      @foreach ($posts as $post => $row )
      <a class="group" href="{{ route('posts.show', $row->id) }}">
        <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
          <img class="absolute top-0 object-cover transition-transform duration-500 ease-in-out size-full start-0 group-hover:scale-105 rounded-xl" src="{{ asset('storage/images/'.$row->image) }}" alt="Image Description">
        </div>

        <div class="mt-7">
          <h3 class="text-2xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
            {{ $row->title }}
          </h3>
          <p class="mt-3 text-gray-800 dark:text-neutral-200">
           {{ Str::limit($row['isi'],50) }}
          </p>
          <p class="inline-flex items-center mt-5 font-medium text-blue-600 gap-x-1 decoration-2 group-hover:underline">
            Read more
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </p>
        </div>
      </a>
      @endforeach
      <!-- End Card -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Blog -->
</div>
  <!-- End Content -->
</x-app-layout>
