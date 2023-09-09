@extends('guru.sidebar-guru')

@section('content-guru')
<!-- content -->
<main class="w-full md:w-3/4 p-4 md:p-8 xl:ml-16">
    <div class="bg-white rounded-lg shadow-md">
        <div class="flex gap-2">
            <div>
                <img src="" alt="Ini Logo" class="w-[175px] h-[175px] border">
            </div>
            <div class="p-2">
                <p class="font-semibold">SMK Negeri 1 Gunung Putri</p>
                <p>Jalan Barokah Nomor 6, Wanaherang, Kecamatan Gunung Putri, Kabupaten Bogor, Jawa Barat 16965</p>
                <br>
                <p class="font-semibold ">Agenda Of Skiel</p>
                <p>Aplikasi berbasis <i>website</i> untuk memudahkan pengolahan data khususnya pembuatan agenda dan absensi siswa</p>
            </div>
        </div>
    </div>
    <br>

    <div class="grid grid-cols-4 gap-4">

        <div class="bg-white p-4 rounded-lg shadow-md mb-6 text-lg font-semibold">
          <p class="ml-2 font-semibold">Jumlah Guru </p>
          <hr class="w-full h-1 my-2 bg-blue-500 border-0 rounded">
          <span class="ml-2 font-medium text-md">1101</span>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-6 text-lg font-semibold">
          <p class="ml-2 font-semibold">Jadwal Hari ini</p>
          <hr class="w-full h-1 my-2 bg-red-500 border-0 rounded">
          <span class="ml-2 font-medium text-md">303</span>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-6 text-lg font-semibold">
          <p class="ml-2 font-semibold">Jadwal Minggu ini</p>
          <hr class="w-full h-1 my-2 bg-amber-500 border-0 rounded">
          <span class="ml-2 font-medium text-md">15</span>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md mb-6 text-lg font-semibold">
          <p class="ml-2 font-semibold">Agenda Minggu ini</p>
          <hr class="w-full h-1 my-2 bg-emerald-500 border-0 rounded">
          <span class="ml-2 font-medium text-md">87</span>
        </div>
    </div>


      <!-- User Notifications -->
      <div class="bg-white p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Notifikasi</h2>
        <ul>
          <li class="mb-2">
            <div class="flex items-center">
              <div class="w-6 h-6 bg-blue-500 text-white flex items-center justify-center rounded-full mr-2">
                <span>1</span>
              </div>
              <span class="text-gray-700">Agenda Ditambahkan</span>
            </div>
          </li>
          <li class="mb-2">
            <div class="flex items-center">
              <div class="w-6 h-6 bg-green-500 text-white flex items-center justify-center rounded-full mr-2">
                <span>2</span>
              </div>
              <span class="text-gray-700">Data absensi siswa</span>
            </div>
          </li>
        </ul>
      </div>
</main>

<!-- content ends -->
@endsection

