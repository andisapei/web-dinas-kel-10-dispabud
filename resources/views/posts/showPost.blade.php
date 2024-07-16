<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-x-2">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Show Post
            </h2>
            <div class="flex gap-x-2">
                <a class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-orange-400 border border-transparent rounded-lg gap-x-2 hover:bg-orange-500 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('posts.edit', $post) }}">
                    Edit
                </a>
                <form onsubmit="return confirm('Are you sure')" method="post" action="{{ route('posts.destroy', $post) }}">
                @method('DELETE')
                @csrf
                <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                    Delet
                </button>
                </form>
            </div>
        </div>
    </x-slot>

    <!-- Content -->
<div class="w-full px-1 pt-1 sm:px-6 md:px-8 lg:ps-72">
    <!-- Blog Article -->
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
      <!-- Content -->
      <div class="lg:col-span-2">
        <div class="py-8 lg:pe-8">
          <div class="space-y-5 lg:space-y-8">
            <a class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline dark:text-blue-500" href="{{ route('posts.index') }}">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
              Back to Blog
            </a>

            <h2 class="text-3xl font-bold lg:text-5xl dark:text-white">{{ $post->title }}</h2>

            <div class="flex items-center gap-x-5">
              <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-800 dark:hover:bg-neutral-800 dark:text-neutral-200" href="#">
                {{ $post->kategori }}
              </a>
              <p class="text-xs text-gray-800 sm:text-sm dark:text-neutral-200">{{ $post->tanggal }}</p>
            </div>

            <figure>
                <img class="object-cover w-full rounded-xl" src="{{ asset('storage/images/'.$post->image) }}" alt="Image Description">
                <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
                  Penulis: {{ $post->penulis }}
                </figcaption>
            </figure>

            <p class="text-lg text-gray-800 dark:text-neutral-200">{{ $post->isi }}</p>

            <div class="text-center">
              <div class="grid gap-3 lg:grid-cols-2">
                <div class="grid grid-cols-2 gap-3 lg:grid-cols-1">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Content -->

      <!-- Sidebar -->
      <div class="lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-gray-50 lg:via-transparent lg:to-transparent dark:from-neutral-800">
        <div class="sticky py-8 top-12 start-0 lg:ps-8">
          <div class="space-y-6">
            <!-- Media -->
            @foreach ($relatedPosts as $relatedPosts)
            @if ($relatedPosts->id !== $post->id)
            <a class="flex items-center group gap-x-6" href="#">
                <div class="grow">
                  <span class="text-sm font-bold text-gray-800 group-hover:text-blue-600 dark:text-neutral-200 dark:group-hover:text-blue-500">
                    {{ $relatedPosts->title }}
                  </span>
                </div>

                <div class="relative flex-shrink-0 overflow-hidden rounded-lg size-20">
                  <img class="absolute top-0 object-cover rounded-lg size-full start-0" src="{{ asset('storage/images/'.$relatedPosts->image) }}" alt="Image Description">
                </div>
            </a>
            @endif
            @endforeach
            <!-- End Media -->
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
    </div>
  </div>
  <!-- End Blog Article -->
</div>
    <!-- End Content -->
</x-app-layout>
