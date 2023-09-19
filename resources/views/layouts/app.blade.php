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
            @include('layouts.navigation')

            <div class="flex h-screen bg-gray-200">
            <!-- Sidebar -->
            <aside class="w-64 bg-gray-50 text-wrap p-4 shadow xl:w-72 ">
            <div class="flex items-center mb-4">
                <!-- Profile-->
                <img src="profile-image.jpg" alt="Profile" class="w-12 h-12 rounded-full mr-3">
                <div>
                <!-- user & role -->
                <p class="text-lg font-semibold">{{ Auth()->user()->name }}</p>
                <p class="text-xs">Web Developer</p>
                </div>
            </div>
            <hr>
            <br>
            <nav>
                <!-- navbar -->
                <ul class="space-y-2 text-sm">
                <li>
                    <p class=" font-light">Menu Utama</p>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('agenda.index') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Agenda
                    </a>
                </li>
                <li>
                    <a href="{{ route('jadwal.index') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Jadwal Pelajaran
                    </a>
                </li>
                <br>
                <hr>

                <li>
                    <p class="text-sm font-light">Basis Data</p>
                </li>
                <li>
                    <a href="{{ url('guru/index/data') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Data Guru
                    </a>
                </li>
                <li>
                    <a href="{{ route('mapel.index') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Mata Pelajaran
                    </a>
                </li>
                <li>
                    <a href="{{ route('siswa.index') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Data Siswa
                    </a>
                </li>
                <li>
                    <a href="{{ route('kelas-jurusan.index') }}" class="flex items-center rounded-md hover:bg-gray-600 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Kelas & Jurusan
                    </a>
                </li>
                <br>
                <hr>
                <li>
                    <p class="text-sm font-light">Menu Lainnya</p>
                </li>
                <li>
                <li>
                    <a id="logoutModalButton" href="#" class="flex items-center rounded-md hover:bg-red-700 hover:text-white hover:font-medium py-2 px-2">
                    <img src="" alt="#">
                    Keluar
                    </a>
                </li>
                </ul>
            </nav>
            </aside>

            <!-- content -->
            @yield('content')
            <!-- content ends -->

                <!-- Logout Modal -->
                <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="mb-4">Apakah Anda yakin ingin keluar dari akun ini?</p>
                    <div class="flex justify-center">
                        <button id="cancelLogout"
                        class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-500 hover:text-gray-100">Batal</button>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <button id="confirmLogout"
                        class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700 hover:text-gray-100">Keluar</button></a>



                    </div>
                </div>
            </div>

            <!-- JavaScript -->
            <script>
            const logoutButton = document.querySelector('#logoutModalButton');
            const logoutModal = document.querySelector('#logoutModal');
            const cancelLogoutButton = document.querySelector('#cancelLogout');
            const confirmLogoutButton = document.querySelector('#confirmLogout');

            logoutButton.addEventListener('click', () => {
            logoutModal.classList.remove('hidden');
            });

            cancelLogoutButton.addEventListener('click', () => {
            logoutModal.classList.add('hidden');
            });

            confirmLogoutButton.addEventListener('click', () => {
            window.location.href = '{{ url('/') }}';
            //   location.reload();
            });

            // Get references to the dropdown buttons and dropdown menus
            const actionsDropdownButton = document.getElementById("actionsDropdownButton");
            const actionsDropdown = document.getElementById("actionsDropdown");

            const filterDropdownButton = document.getElementById("filterDropdownButton");
            const filterDropdown = document.getElementById("filterDropdown");

            // Add event listeners to the dropdown buttons
            actionsDropdownButton.addEventListener("click", () => {
                actionsDropdown.classList.toggle("hidden");
            });

            filterDropdownButton.addEventListener("click", () => {
                filterDropdown.classList.toggle("hidden");
            });

            </script>
        </div>
    </body>
</html>
