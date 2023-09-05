@extends('sidebar')

@section('content')
<!-- content -->
<main class="w-full md:w-3/4 p-4 md:p-4 xl:ml-16">
<h2 class="text-lg font-semibold ml-2 pb-4">Agenda Kelas</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="bg-slate-50 p-2">
        <!-- section start -->
        <section class="bg-gray-50 dark:bg-gray-900 flex items-center mb-3 mt-2">
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
                    <!-- dropdown -->

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
                            Guru
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
                            Heri Hermawan, S. Kom.
                        </td>
                        <td class="flex items-centecr px-6 py-4 space-x-3">
                            <button id="detailModalButton" class="font-medium text-stone-600 dark:text-stone-500 hover:underline">Detail</button>
                            <button id="createModalButton" class="font-medium text-sky-600 dark:text-sky-500 hover:underline">Tambah</button>
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
                    <div>
                        <label for="" class="right-2 mb-1">Hari Mengajar</label><br>
                            <select id="" name=""
                                class="p-2 w-full bg-slate-100 rounded-md mb-3">
                                    <option disabled value>--- Pilih Hari ---</option>
                                    <option value="">Senin</option>
                                    <option value="">Selasa</option>
                                    <option value="">Rabu</option>
                                    <option value="">Kamis</option>
                                    <option value="">Jumat</option>
                            </select>

                        <label for="" class="right-2 mb-1">Jam Mulai</label><br>
                            <input type="time" name="" value="" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                        <label for="" class="right-2 mb-1">Jam Selesai</label><br>
                            <input type="time" name="" value="" class="p-2 w-full bg-slate-100 rounded-md mb-3">

                        <label for="" class="right-2 mb-1">Mata Pelajaran</label><br>
                            <select id="" name=""
                                class="p-2 w-full bg-slate-100 rounded-md mb-3">
                                    <option disabled value>--- Pilih Mata Pelajaran ---</option>
                                    <option value="">PBO</option>
                                    <option value="">PPL</option>
                            </select>

                        <label for="" class="right-2 mb-1">Kelas</label><br>
                            <select id="" name=""
                                class="p-2 w-full bg-slate-100 rounded-md mb-3">
                                    <option disabled value>--- Pilih Kelas ---</option>
                                    <option value="">XII RPL 1</option>
                                    <option value="">XII RPL 2</option>
                            </select>
                    </div>
                </form>
            <div class="flex justify-center">
                <button id="confirmeditModal"
                class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 hover:text-gray-100">SIMPAN</button>
            </div>
        </div>
    </div>


    <!-- Detail Modal -->
    <div id="detailModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-end">
            <button id="canceldetail"
                class="mr-2 px-3 font-medium py-1 bg-gray-50 text-gray-700 rounded-xl hover:bg-gray-600 hover:text-gray-100 shadow">X</button>
        </div>
        <p class="flex justify-center font-medium text-lg">DETAIL AGENDA</p>
        <p class="flex justify-center font-light text-sm mb-4">Berikut ini adalah agenda lengkap guru</p>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <th scope="col" class="p-4">
                            Jam Mulai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jam Selesai
                        </th>
                        <th scope="col" class="p-4">
                            Mapel
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kelas
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            1
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Senin
                        </td>
                        <td class="w-4 p-4">
                            08:00
                        </td>
                        <th class="w-4 p-4 font-normal">
                            09:20
                        </td>
                        <td class="w-4 p-4">
                            PBO
                        </td>
                        <th class="w-4 p-4 font-normal">
                            XII RPL 2
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



<script>
    // detail Modal
    const detailButton = document.querySelector('#detailModalButton');
    const detailModal = document.querySelector('#detailModal');
    const canceldetailButton = document.querySelector('#canceldetail');

    detailButton.addEventListener('click', () => {
    detailModal.classList.remove('hidden');
    });

    canceldetailButton.addEventListener('click', () => {
    detailModal.classList.add('hidden');
    });


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
    window.location.href = '{{ url('/agenda') }}';
    //   location.reload();
    });


</script>
<!-- content ends -->
@endsection
