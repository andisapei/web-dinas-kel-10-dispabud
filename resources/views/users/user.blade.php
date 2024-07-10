<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            User
        </h2>
    </x-slot>

   <!-- Content -->
<div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:ps-72">
       <!-- Table Section -->
<div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-1 lg:py-1 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
              <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                  Users
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Add users, edit and more.
                </p>
              </div>

              <div>
                <div class="inline-flex gap-x-2">

                  <a class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{ route('users.create')}}">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Add user
                  </a>
                </div>
              </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
              <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>

                  <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                        NO
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                        Name
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="items-center px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                        ADDRESS
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                        EMAIL
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-start">
                    <div class="flex items-center gap-x-2">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                        ACTION
                      </span>
                    </div>
                  </th>

                  <th scope="col" class="px-6 py-3 text-end"></th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @forelse ($users as $index => $row )
                <tr>
                    <td scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                      <div class="flex items-center gap-x-2">
                          <span class="text-sm font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                          {{ $index+ $users->firstItem() }}
                          </span>
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                        <div class="flex items-center gap-x-3">
                          <img class="inline-block size-[38px] rounded-full" src="{{ asset('storage/images/'.$row->profile) }}" alt="Image Description">
                          <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $row->name }}</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="size-px w-72 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                          {{ $row->address }}
                        </span>
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                              {{ $row->email }}
                          </span>
                        </div>
                    </td>
                    <td class="flex py-3 size-px whitespace-nowrap">
                      <div class="px-2 py-1.5">
                        <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline dark:text-blue-500" href="{{ route('users.edit', $row->id) }}">
                          Edit
                        </a>
                      </div>
                      <div class="px-6 py-1.5">
                        <form onsubmit="return confirm('Are you sure')" method="post" action="{{ route('users.destroy', $row->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="inline-flex items-center text-sm font-medium text-red-600 gap-x-1 decoration-2 hover:underline dark:text-red-500" href="#">
                            Delete
                            </button>
                        </form>
                      </div>
                    </td>
                </tr>
                @empty
                <h1>NO Data</h1>
                @endforelse
              </tbody>
            </table>
            <!-- End Table -->

            <!-- Footer -->
            <div class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
              {{ $users->links('pagination::tailwind') }}
                {{-- <div>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
                </p>
              </div>

              <div>
                <div class="inline-flex gap-x-2">
                  <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                    Prev
                  </button>

                  <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                    Next
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                  </button>
                </div>
              </div> --}}
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Table Section -->
</div>
  </div>
  <!-- End Content -->
</x-app-layout>
