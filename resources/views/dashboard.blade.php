<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <!-- Content -->
<div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:ps-72">
    <!-- Card Section -->
<div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-1 lg:py-1 mx-auto">
    <!-- Grid -->
    <div class="grid gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 sm:gap-6">
      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="{{ route('users.index') }}">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                User
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                1 User
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="#">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                App Development
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                26 job positions
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="#">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                Arts & Entertainment
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                9 job positions
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="#">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                Accounting
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                11 job positions
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="#">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                UI Designer
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                37 job positions
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="#">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                Apps
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                2 job positions
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="#">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                Content Writer
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                10 job positions
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->

      <!-- Card -->
      <a class="flex flex-col transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-neutral-900 dark:border-neutral-800" href="#">
        <div class="p-4 md:p-5">
          <div class="flex items-center justify-between">
            <div>
              <h3 class="font-semibold text-gray-800 group-hover:text-blue-600 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                Analytics
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                14 job positions
              </p>
            </div>
            <div class="ps-3">
              <svg class="flex-shrink-0 text-gray-800 size-5 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </div>
          </div>
        </div>
      </a>
      <!-- End Card -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Section -->
  </div>
  <!-- End Content -->
</x-app-layout>
