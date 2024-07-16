<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Input Wisata
        </h2>
    </x-slot>

   <!-- Content -->
<div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:ps-72">
    <!-- Card Section -->
<div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8 lg:py-1">
    <form action="{{ route('wisatas.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <!-- Card -->
      <div class="bg-white shadow rounded-xl dark:bg-neutral-900">
        <div class="p-4 pt-0 sm:pt-0 sm:p-7">
          <!-- Grid -->
          <div class="space-y-4 sm:space-y-6">
            <div class="space-y-2">
              <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Nama Wisata
              </label>

              <input name="nama_wisata" id="af-submit-app-project-name" type="text" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter project name">
            </div>

            <div class="space-y-2">
              <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Alamat
              </label>

              <input name="lokasi" id="af-submit-app-project-name" type="text" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter project name">
            </div>

            <div class="space-y-2">
              <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Harga Tiket
              </label>

              <input name="harga_tiket" id="af-submit-app-project-name" type="number" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter project name">
            </div>

            <div class="space-y-2">
              <label for="af-submit-app-project-name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Fasilitas
              </label>

              <input name="fasilitas" id="af-submit-app-project-name" type="text" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter project name">
            </div>

            <div class="space-y-2">
              <label for="af-submit-project-url" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Jam Operasional
              </label>

              <input name="jam_operasional" id="af-submit-project-url" type="text" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="https://example.so">
            </div>

            <div class="space-y-2">
                <label for="af-wisata-kontak" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                  Kontak
                </label>

                <input name="kontak" id="af-wisata-kontak" type="text" class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="+x(xxx)xxx-xx-xx">
              </div>

            <div class="space-y-2">
                <label for="af-submit-app-alamat" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                  Tambahkan Foto
                </label>

                <input name="photo" id="af-submit-app-image" type="file" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter project name">
              </div>

            <div class="space-y-2">
              <label for="af-submit-app-description" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                Description
              </label>

              <textarea name="deskripsi" id="af-submit-app-description" class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="6" placeholder="A detailed summary will better explain your products to the audiences. Our users will see this in your dedicated product page."></textarea>
            </div>
          </div>
          <!-- End Grid -->

          <div class="flex justify-center mt-5 gap-x-2">
            <button type="submit" class="inline-flex items-center px-4 py-3 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
              Submit your project
            </button>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </form>
  </div>
  <!-- End Card Section -->
</div>
  <!-- End Content -->
</x-app-layout>
