@extends('sidebar')

@section('content')
<!-- content -->
<main class="w-full md:w-3/4 p-4 md:p-8 xl:ml-16">
<h2 class="text-lg font-semibold ml-2 pb-4">DATA GURU</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="bg-slate-50 p-2">
        <!-- section start -->
        <section class="bg-gray-50 dark:bg-gray-900 flex items-center mb-2">
            <div class="max-w-screen-xl px-4 mx-auto lg:px-12 w-full">
                <!-- Start coding here -->
                <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg ">
                <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-slate-500 focus:border-slate-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500" placeholder="Search" required="">
                        </div>
                    </form>
                    </div>
                    <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                        <button id="createModalButton" type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:ring-slate-300 dark:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none dark:focus:ring-slate-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Tambah Data
                        </button>
                    <!-- dropdown -->
                    <div class="flex items-center w-full space-x-3 md:w-auto">
                        <!-- action dropdown -->
                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-slate-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                            Aksi
                        </button>
                        <!-- action menu -->
                        <div id="actionsDropdown" class="z-10 hidden absolute top-16 right-32 bg-white divide-y divide-gray-100 rounded shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ubah Semua</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Hapus Semua</a>
                            </div>
                        </div>

                        <!-- filter dropdown -->
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-slate-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <!-- Dropdown filter -->
                        <div id="filterDropdown" class="z-10 hidden absolute top-16 right-0 w-32 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                Kategori
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-slate-600 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Laki-laki
                                    </label>
                                </li>
                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-slate-600 focus:ring-slate-500 dark:focus:ring-slate-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                    <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Perempuan
                                    </label>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Inisial
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mata Pelajaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            1
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            HH
                        </th>
                        <td class="px-6 py-4">
                            Heri Hermawan, S. Kom.
                        </td>
                        <td class="px-6 py-4">
                            Laki-laki
                        </td>
                        <td class="px-6 py-4">
                            Pemrograman Berbasis Objek
                        </td>
                        <td class="px-6 py-4">
                            12345678
                        </td>
                        <td class="flex items-center px-6 py-4 space-x-3">
                            <button id="editModalButton" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ubah</button>
                            <button id="deleteModalButton" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</main>

    <!-- Create Modal -->
    <div id="createModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-end">
            <button id="cancelcreate"
                class="mr-2 px-3 font-medium py-1 bg-gray-50 text-gray-700 rounded-xl hover:bg-gray-600 hover:text-gray-100 shadow">X</button>
        </div>
        <p class="flex justify-center font-medium text-lg">TAMBAH DATA</p>
        <p class="flex justify-center font-light text-sm mb-4">Tambahlah data dengan informasi yang sebenar-benarnya</p>
            <form class="px-4 py-2 left-1/2">
                <label for="" class="right-2 mb-1">Inisial</label><br>
                    <input type="text" name="" value="" placeholder="Kode Guru" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Nama</label><br>
                    <input type="text" name="" value="" placeholder="Nama Guru" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Jenis Kelamin</label><br>
                    <select id="" name=""
                        class="p-2 w-full bg-slate-100 rounded-md mb-3">
                            <option disabled value>--- Pilih Jenis Kelamin ---</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                    </select>

                <label for="" class="right-2 mb-1">Mata Pelajaran</label><br>
                    <select id="" name=""
                        class="p-2 w-full bg-slate-100 rounded-md mb-3">
                            <option disabled value>--- Pilih Mata Pelajaran ---</option>
                            <option value="">PBO</option>
                            <option value="">PPL</option>
                    </select>

                <label for="" class="right-2 mb-1">Password</label><br>
                    <input type="text" name="" value="" placeholder="Password Guru" class="p-2 w-full bg-slate-100 rounded-md mb-3">
            </form>
        <div class="flex justify-center">
            <button id="confirmcreate"
            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700 hover:text-gray-100">SIMPAN</button>
        </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-end">
            <button id="canceledit"
                class="mr-2 px-3 font-medium py-1 bg-gray-50 text-gray-700 rounded-xl hover:bg-gray-600 hover:text-gray-100 shadow">X</button>
        </div>
        <p class="flex justify-center font-medium text-lg">UBAH DATA</p>
        <p class="flex justify-center font-light text-sm mb-4">Mohon berhati-hati & perhatikan keakuratan saat mengubah data</p>
            <form class="px-4 py-2 left-1/2">
                <label for="" class="right-2 mb-1">Inisial</label><br>
                    <input type="text" name="" value="" placeholder="Kode Guru" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Nama</label><br>
                    <input type="text" name="" value="" placeholder="Nama Guru" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                <label for="" class="right-2 mb-1">Jenis Kelamin</label><br>
                    <select id="" name=""
                        class="p-2 w-full bg-slate-100 rounded-md mb-3">
                            <option disabled value>--- Pilih Jenis Kelamin ---</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                    </select>

                <label for="" class="right-2 mb-1">Mata Pelajaran</label><br>
                    <select id="" name=""
                        class="p-2 w-full bg-slate-100 rounded-md mb-3">
                            <option disabled value>--- Pilih Mata Pelajaran ---</option>
                            <option value="">PBO</option>
                            <option value="">PPL</option>
                    </select>

                <label for="" class="right-2 mb-1">Password</label><br>
                    <input type="text" name="" value="" placeholder="Password Guru" class="p-2 w-full bg-slate-100 rounded-md mb-3">
            </form>
        <div class="flex justify-center">
            <button id="confirmedit"
            class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700 hover:text-gray-100">SIMPAN</button>
        </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex justify-center">
                <p
                    class="mr-2 px-4 text-xl font-semibold py-1 bg-red-700 text-gray-100 rounded-xl shadow">!</p>
            </div>
            <br>
            <p class="mb-4">Apakah Anda yakin ingin menghapus data ini secara permanen?</p>
            <br>
            <div class="flex justify-center">
                <button id="canceldelete"
                class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-500 hover:text-gray-100">Batal</button>
                <button id="confirmdelete"
                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-800 hover:text-gray-100">Hapus</button>
            </div>
        </div>
    </div>
    <script>
        // Create Modal
        const createButton = document.querySelector('#createModalButton');
        const createModal = document.querySelector('#createModal');
        const cancelcreateButton = document.querySelector('#cancelcreate');
        const confirmcreateButton = document.querySelector('#confirmcreate');

        createButton.addEventListener('click', () => {
        createModal.classList.remove('hidden');
        });

        cancelcreateButton.addEventListener('click', () => {
        createModal.classList.add('hidden');
        });

        confirmcreateButton.addEventListener('click', () => {
        window.location.href = '{{ url('/dataguru') }}';
        //   location.reload();
        });

        // Edit Modal
        const editButton = document.querySelector('#editModalButton');
        const editModal = document.querySelector('#editModal');
        const canceleditButton = document.querySelector('#canceledit');
        const confirmeditButton = document.querySelector('#confirmedit');

        editButton.addEventListener('click', () => {
        editModal.classList.remove('hidden');
        });

        canceleditButton.addEventListener('click', () => {
        editModal.classList.add('hidden');
        });

        confirmeditButton.addEventListener('click', () => {
        window.location.href = '{{ url('/dataguru') }}';
        //   location.reload();
        });

        // Delete Modal
        const deleteButton = document.querySelector('#deleteModalButton');
        const deleteModal = document.querySelector('#deleteModal');
        const canceldeleteButton = document.querySelector('#canceldelete');
        const confirmdeleteButton = document.querySelector('#confirmdelete');

        deleteButton.addEventListener('click', () => {
        deleteModal.classList.remove('hidden');
        });

        canceldeleteButton.addEventListener('click', () => {
        deleteModal.classList.add('hidden');
        });

        confirmdeleteButton.addEventListener('click', () => {
        window.location.href = '{{ url('/dataguru') }}';
        //   location.reload();
        });
    </script>
<!-- content ends -->
@endsection